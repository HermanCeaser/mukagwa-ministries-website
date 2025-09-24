# Mukagwa Ministries - Statamic CMS Integration Guide

## Overview

This project has been successfully converted to use Statamic CMS for managing About Us and Gallery page content. Admins can now edit content without touching code through the Statamic Control Panel.

## Accessing the Admin Panel

1. **URL**: `/cp` (e.g., `https://yoursite.com/cp`)
2. **Admin Login**: `admin@mukagwa.org`
3. **Password**: `password` (Please change this in production!)

## What's Been Converted

### About Us Page (`/about-us`)
The About Us page now supports admin-editable content through Statamic:

**Editable Content:**
- Page title and main content
- Mission title and content
- Goal title and content  
- Welcome title and subtitle
- Team section titles
- About image upload
- Team members (separate collection)

**Team Members Collection:**
- Name and position
- Profile photo upload
- Social media links (Facebook, Twitter, Instagram, LinkedIn, YouTube)
- Display order management

### Gallery Page (`/gallery`)
The Gallery page now supports dynamic gallery sections:

**Editable Content:**
- Page title and intro text
- Gallery sections with titles and subtitles
- Multiple image uploads per section
- Section display order

## How to Edit Content

### Editing Pages
1. Go to `/cp` and log in
2. Click "Collections" in the sidebar
3. Select "Pages"
4. Choose "About Us" or "Gallery"
5. Edit the content using the rich text editor
6. Click "Save" to publish changes

### Managing Team Members
1. Go to `/cp` and log in
2. Click "Collections" in the sidebar
3. Select "Team Members"
4. Click "Create Entry" to add new members
5. Fill in name, position, upload photo
6. Add social media links as needed
7. Set display order (lower numbers appear first)
8. Click "Save & Publish"

### Managing Gallery Sections
1. Go to `/cp` and log in
2. Click "Collections" in the sidebar
3. Select "Gallery Sections"
4. Click "Create Entry" to add new sections
5. Enter section title and subtitle
6. Upload multiple images for the section
7. Set display order
8. Click "Save & Publish"

## Technical Implementation

### File Structure
```
content/
├── collections/
│   ├── pages/
│   │   ├── about.md
│   │   └── gallery.md
│   ├── team_members/
│   │   ├── betty-mutunda.md
│   │   ├── stephen-kuwereka.md
│   │   └── ...
│   └── gallery_sections/
│       ├── all-africa-conference.md
│       └── ...
├── assets/
│   └── assets.yaml
└── ...

resources/
└── blueprints/
    └── collections/
        ├── pages/
        │   └── page.yaml
        ├── team_members/
        │   └── team_member.yaml
        └── gallery_sections/
            └── gallery_section.yaml
```

### Controllers
- `AboutController.php` - Fetches About page and team members data
- `GalleryController.php` - Fetches Gallery page and sections data

### Templates
- `resources/views/pages/about.blade.php` - About Us template with Statamic integration
- `resources/views/pages/gallery.blade.php` - Gallery template with Statamic integration

## Benefits

1. **No Code Changes Needed**: Content can be updated without developer intervention
2. **Rich Text Editing**: Easy-to-use WYSIWYG editor for content
3. **Image Management**: Built-in asset management for photos and images
4. **User-Friendly**: Intuitive admin interface designed for non-technical users
5. **Version Control**: Content changes are tracked and can be reverted
6. **Flexible Structure**: Easy to add new fields or content types as needed

## Fallback Behavior

The templates are designed with fallback behavior:
- If Statamic data is not available, default static content is displayed
- This ensures the site always works, even if there are CMS issues
- Original layout and design are preserved exactly

## Future Enhancements

The CMS structure can easily be extended to support:
- Home page content management
- Blog/news articles
- Event management
- Service pages
- Additional team members or staff categories
- More gallery categories or albums

## Support

For technical support or questions about content management:
1. Check this guide first
2. Contact the development team
3. Refer to [Statamic documentation](https://statamic.dev) for advanced features

## Security Notes

- Change the default admin password immediately in production
- Consider setting up proper user roles and permissions
- Regular backups of content files are recommended
- Keep Statamic updated for security patches