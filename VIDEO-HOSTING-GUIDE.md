# Video Hosting Guide

Your videos are too large for Vercel (216 MB total, limit is 100 MB).

## Large Video Files:
- `202405091521.mp4` - 158.9 MB
- `Book_Your_Next_Trip.mp4` - 31.29 MB
- `y2mate.com - Kenya Safari Holidays  Safari Holidays  Kuoni_1080p.mp4` - 26.54 MB

## Solutions:

### Option 1: Upload to YouTube (Recommended - FREE)
1. Upload videos to your YouTube channel
2. Get the embed code
3. Replace video tags in your HTML with YouTube embeds

Example:
```html
<iframe width="800" height="450" src="https://www.youtube.com/embed/YOUR_VIDEO_ID" frameborder="0" allowfullscreen></iframe>
```

### Option 2: Use Cloudinary (FREE tier available)
1. Sign up at https://cloudinary.com
2. Upload your videos
3. Use their video URLs in your HTML

### Option 3: Use Vimeo
1. Upload to Vimeo
2. Get embed code
3. Replace in HTML

## For now:
I've excluded the videos from deployment so your site can go live. You can add them back using one of the above methods.
