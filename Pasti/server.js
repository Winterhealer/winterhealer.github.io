const express = require('express');
const bodyParser = require('body-parser');
const mongoose = require('mongoose');

const app = express();
const port = 3000;

// Connect to MongoDB database
mongoose.connect('mongodb://localhost:27017/minimal_website', { useNewUrlParser: true, useUnifiedTopology: true });

// Create a user schema and model (adjust schema according to your needs)
const userSchema = new mongoose.Schema({
    username: String,
    password: String
});

const User = mongoose.model('User', userSchema);

app.use(bodyParser.json());

// Handle login POST request
app.post('/login', (req, res) => {
    const { username, password } = req.body;

    // Find the user in the database
    User.findOne({ username: username, password: password }, (err, user) => {
        if (err) {
            res.json({ success: false });
        } else if (user) {
            res.json({ success: true });
        } else {
            res.json({ success: false });
        }
    });
});

// Serve main page
app.get('/main', (req, res) => {
    res.send('Welcome to the main page.');
});

app.listen(port, () => {
    console.log(`Server is running on port ${port}`);
});
