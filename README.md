# laravelCookie

Jest to sposób na wprowadzenie do laravel ciasteczka informacyjnego np. polityka prywatności

This is a way of introducing an information cookie, e.g. a privacy policy, into the laravel

Kolejną sprawą jest przypisanie naszego Middleware do karnelu w app/http/ tak żeby box był widocznby na wszystkich stronach www

Another thing is assigning our Middleware to the carnel in the app / http / so that the box would be visible on all websites

![MiddlewareKarnel](https://user-images.githubusercontent.com/5230920/177551062-34c04f84-7b13-41d2-bc25-28b0eb4a8e35.png)

Następnie dodajemy nazwę ciastecza do Middleware w app/http/Middleware/EncryptCookies.php

![MiddlewareEncrypt](https://user-images.githubusercontent.com/5230920/177551913-42f471d0-9567-4222-815b-ed658f8ed765.png)

I tak oto możemy się cieszyć wyskakującym boksem Cookie


![MiddlewarePolitykaPrywatnsci](https://user-images.githubusercontent.com/5230920/178060150-faa32c33-d120-400b-a29f-07b5dbc9a576.png)


Powodzenia
