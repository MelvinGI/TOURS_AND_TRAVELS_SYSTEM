# Melvin's Travel and Tours Agency 🌍✈️

A comprehensive travel and consultancy website offering visa services, safari tours, hotel bookings, flight reservations, and study abroad programs. Experience adventure, connect with the world, and dive into different cultures.

## 🌐 Live Demo
**Website:** [https://savina-travel-agency.vercel.app](https://savina-travel-agency.vercel.app)

## ✨ Features

### Travel Services
- **Visa Consultancy** - Complete visa application support for visitor, student, business, family, transit, and medical visas
- **Tours & Travel** - Expertly guided safaris to Kenya's top destinations including Maasai Mara, Amboseli, Samburu, and more
- **Hotel Booking** - Accommodation options from luxury hotels to budget-friendly hostels
- **Flight Booking** - Affordable flight reservations to various destinations worldwide

### Study Abroad Services
- Study destination guidance
- IELTS test preparation
- Career counselling
- University selection and placement
- Visa guidance for students
- Pre-departure and post-arrival services

### Additional Features
- Interactive contact form with MongoDB integration
- Responsive design for all devices
- Video showcases of tour destinations
- Team profiles and social media integration
- Client testimonials and partner airlines display

## 🛠️ Tech Stack

### Frontend
- **HTML5** - Semantic markup
- **CSS3** - Custom styling
- **JavaScript** - Interactive functionality
- **Bootstrap 5** - Responsive framework and UI components
- **AOS (Animate On Scroll)** - Scroll animations
- **GLightbox** - Lightbox for images and videos
- **Swiper.js** - Touch slider
- **Remixicon & Bootstrap Icons** - Icon libraries

### Backend
- **Node.js** - Runtime environment
- **Express.js** - Web application framework
- **MongoDB** - Database for contact form submissions
- **Mongoose** - MongoDB object modeling

### Deployment & Hosting
- **Vercel** - Serverless deployment platform
- **Vercel CLI** - Command-line deployment tool

### Additional Libraries
- **Boxicons** - Icon toolkit
- **Isotope Layout** - Grid layout library
- **Waypoints** - Scroll-triggered events

## 📁 Project Structure

```
savina-consultancy/
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── img/
│   │   ├── logos, images, and media files
│   ├── js/
│   │   └── main.js
│   ├── scss/
│   └── vendor/
│       ├── aos/
│       ├── bootstrap/
│       ├── glightbox/
│       ├── swiper/
│       └── other libraries
├── forms/
│   └── contact.php
├── index.html (main file)
├── server.js
├── package.json
├── vercel.json
└── README.md
```

## 🚀 Getting Started

### Prerequisites
- Node.js (v14 or higher)
- npm or yarn
- MongoDB (for local development)

### Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd savina-consultancy
   ```

2. **Install dependencies**
   ```bash
   npm install
   ```

3. **Start the development server**
   ```bash
   npm start
   ```

4. **Open your browser**
   ```
   http://localhost:3000
   ```

## 🌐 Deployment to Vercel

### Quick Deploy

1. **Install Vercel CLI**
   ```bash
   npm install -g vercel
   ```

2. **Login to Vercel**
   ```bash
   vercel login
   ```

3. **Deploy to production**
   ```bash
   vercel --prod
   ```

### Environment Variables
For production MongoDB connection, add in Vercel dashboard:
- `MONGODB_URI` - Your MongoDB Atlas connection string

## 📝 Configuration

### MongoDB Setup (Optional)
The contact form uses MongoDB to store submissions. For production:

1. Create a free MongoDB Atlas account
2. Create a cluster and database
3. Get your connection string
4. Add `MONGODB_URI` environment variable in Vercel

### Video Hosting
Large video files are excluded from deployment. Host videos on:
- YouTube (recommended)
- Cloudinary
- Vimeo

See `VIDEO-HOSTING-GUIDE.md` for details.

## 🎨 Customization

### Styling
- Main styles: `assets/css/style.css`
- Bootstrap variables can be customized in `assets/scss/`

### Content
- Main page: `index.html`
- Update team info, services, and contact details directly in HTML

### Images & Media
- Add images to `assets/img/`
- Update image paths in HTML files

## 👥 Team

- **Samuel Ngunju** - CEO & Travel Consultant
- **Madam Susan** - Education Consultant

## 📞 Contact

- **Location:** Mombasa, Bamburi mwisho opp Petro city old Malindi RD
- **Email:** savina consultancytravelagency@gmail.com
- **Phone:** +254 704158486

## 🔗 Social Media

- [YouTube](https://youtube.com/@savinatravel)
- [TikTok](https://www.tiktok.com/@savina_consultancy_tours)
- [LinkedIn](https://www.linkedin.com/in/samuel-ngunju-51b62a294)

## 📄 License

© 2024 Melvin's Travel and Tours. All Rights Reserved.

## 🙏 Acknowledgments

- Bootstrap team for the amazing framework
- AOS library for smooth animations
- All open-source contributors

---

**Designed by Melvin Gitau.G.**
