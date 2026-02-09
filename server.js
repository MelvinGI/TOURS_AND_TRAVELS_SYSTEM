// Import necessary modules
const express = require('express');
const mongoose = require('mongoose');

// Create an Express application
const app = express();

// Middleware to parse JSON bodies
app.use(express.json());

// Serve static files from the current directory
app.use(express.static(__dirname));

// MongoDB connection (use environment variable for production)
const MONGODB_URI = process.env.MONGODB_URI || 'mongodb://localhost:27017/contactFormDB';
mongoose.connect(MONGODB_URI, {
    useNewUrlParser: true,
    useUnifiedTopology: true
}).then(() => {
    console.log("Connected to MongoDB");
}).catch(err => {
    console.error("Error connecting to MongoDB:", err);
});

// Define a schema for the contact form data
const contactSchema = new mongoose.Schema({
    name: String,
    email: String,
    subject: String,
    message: String
});

// Create a model based on the schema
const Contact = mongoose.model('Contact', contactSchema);

// Define a POST endpoint to handle form submissions
app.post('/api/contact', async (req, res) => {
    try {
        const { name, email, subject, message } = req.body;

        // Create a new contact instance
        const newContact = new Contact({
            name,
            email,
            subject,
            message
        });

        // Save the contact to the database
        await newContact.save();

        res.status(201).json({ message: 'Contact form submitted successfully' });
    } catch (err) {
        console.error("Error submitting contact form:", err);
        res.status(500).json({ error: 'Internal server error' });
    }
});

// Export for Vercel serverless
module.exports = app;

// Start the server (for local development only)
if (require.main === module) {
    const PORT = process.env.PORT || 3000;
    app.listen(PORT, () => {
        console.log(`Server is running on port ${PORT}`);
    });
}
