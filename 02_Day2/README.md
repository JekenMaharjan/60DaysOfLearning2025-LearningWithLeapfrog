# Day 2 : PHP Installation

## Setting up PHP using XAMPP

**Goal**: Install XAMPP, run PHP files via htdocs, and view in browser using VS Code.

**Step 1**: Install XAMPP
- Go to `https://www.apachefriends.org`
- Download the latest XAMPP for Windows.
- Install XAMPP (choose default settings).

**Step 2**: Start Apache Server
  - Open XAMPP Control Panel.
  - Start the Apache server (green light = good).

**Step 3**: Create PHP Files in htdocs
- Go to:
- C:\xampp\htdocs\
- Create a new folder (e.g., myphp).
- Inside that folder, create a PHP file like index.php:
        <?php
        echo "Hello, PHP with XAMPP!";
        ?>

**Step 4**: Open VS Code in That Folder
- Right-click the folder (e.g., myphp) → Open with VS Code.
- Make edits to your `.php` file directly.

**Step 5**: Run PHP in Browser
- Open browser and go to:     `http://localhost/myphp/`
- You should see:     Hello, PHP with XAMPP!

> You're ready!

---

## Bonus Tips:
- Make sure file is saved with `.php` extension.
- You can create multiple projects/folders inside htdocs.
- Use `http://localhost/foldername/filename.php` to run other files.