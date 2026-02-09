# GitHub Setup Guide

## Step 1: Create a GitHub Repository

1. Go to https://github.com
2. Click the "+" icon in the top right corner
3. Select "New repository"
4. Repository name: `savina-travel-agency` (or your preferred name)
5. Description: "Melvin's Travel and Tours Agency - Comprehensive travel and consultancy website"
6. Choose "Public" or "Private"
7. **DO NOT** initialize with README, .gitignore, or license (we already have these)
8. Click "Create repository"

## Step 2: Connect Your Local Repository to GitHub

After creating the repository, GitHub will show you commands. Use these:

```bash
git remote add origin https://github.com/YOUR-USERNAME/savina-travel-agency.git
git branch -M main
git push -u origin main
```

Replace `YOUR-USERNAME` with your actual GitHub username.

## Step 3: Push Your Code

```bash
git push -u origin main
```

## Alternative: Using SSH (if you have SSH keys set up)

```bash
git remote add origin git@github.com:YOUR-USERNAME/savina-travel-agency.git
git branch -M main
git push -u origin main
```

## Future Updates

After the initial push, to update your repository:

```bash
git add .
git commit -m "your commit message"
git push
```

## Connect to Vercel via GitHub (Optional but Recommended)

1. Go to https://vercel.com/dashboard
2. Click "Add New Project"
3. Import your GitHub repository
4. Vercel will auto-deploy on every push to main branch

This enables automatic deployments whenever you push changes to GitHub!
