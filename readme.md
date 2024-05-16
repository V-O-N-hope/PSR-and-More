Task:


Создайте класс "EmailSender" в соответствии с PSR-4.

Определите пространство имен App\Mail.

Реализуйте метод send(), который отправляет электронное письмо с использованием SMTP-сервера.

Добавьте поддержку различных типов сообщений (например, приветственное письмо, письмо с напоминанием, письмо с уведомлением).

Используйте класс EmailSender для отправки тестового письма.


Requirements:

    OS with the Docker installed on it
    Gmail account with allowing password signin in applications

Pre Steps:

    Get your gmail email
    Set a password for email to use in third party applications
    In public/src/Mail/EmailSender.php set your mail and password in construct in fields 
        $this->mailer->Username = '';
        $this->mailer->Password = '';
    In public/index.php set a mail of your recipient

Run:

    cd ./docker
    docker compose up -d --build


If all works, visit http://localhost and you`ll see a webpage and some notifications on your mail address   

Have a nice day!
