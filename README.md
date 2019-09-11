# Demo Adminpanel: Login with Username/Email

It is a demo project how to quickly add `username` into users table and allow users to login with email/password or username/password credentials. 

Also: 
- It's adminpanel, so administrators are able to add/edit username field
- Users are able to reset their password by entering username, not only by email

The core of this project was generated with our [QuickAdminPanel](https://2019.quickadminpanel.com) tool. 

## Screenshots

![Laravel email/username login screenshot 01](https://laraveldaily.com/wp-content/uploads/2019/09/Screen-Shot-2019-09-11-at-4.50.00-PM.png)

![Laravel email/username login CoreUI screenshot 02](https://laraveldaily.com/wp-content/uploads/2019/09/Screen-Shot-2019-09-11-at-4.50.10-PM.png)

![Laravel email/username login CoreUI screenshot 03](https://laraveldaily.com/wp-content/uploads/2019/09/Screen-Shot-2019-09-11-at-4.50.20-PM.png)

![Laravel email/username login CoreUI screenshot 04](https://laraveldaily.com/wp-content/uploads/2019/09/Screen-Shot-2019-09-11-at-4.50.40-PM.png)

## How to use

- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate --seed__ (it has some seeded data for your testing)
- That's it: launch the main URL or go to __/login__ and login with default credentials __admin@admin.com__ - __password__

## License

Basically, feel free to use and re-use any way you want.

---

## More from our LaravelDaily Team

- Check out our adminpanel generator [QuickAdminPanel](https://quickadminpanel.com)
- Read our [Daily Blog with Laravel Tutorials](https://laraveldaily.com)
- FREE E-book: [50 Laravel Quick Tips (and counting)](https://laraveldaily.com/free-e-book-40-laravel-quick-tips-and-counting/)
- Subscribe to our [YouTube channel Laravel Business](https://www.youtube.com/channel/UCTuplgOBi6tJIlesIboymGA)
- Enroll in our [Laravel Online Courses](https://laraveldaily.teachable.com/)
