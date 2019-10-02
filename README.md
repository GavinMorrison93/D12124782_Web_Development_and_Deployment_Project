D12124782_Web_Development_and_Deployment_Project

This application is a website for a book club.

I started the project using a mixture of html and php when I was building the main body of the site/application. I then moved over to bootstrap when I started building the 'Suggestion' list and 'My Book' list facility. Once I started using Bootstrap I wished I had read ahead to week 6 when it was covered in the lecture notes and done the whole project using it, and I had planned to go back and rebuild the main body using the Bootstrap framework but I didn't have time.

The site can be viewed as a website without restriction, but also has a membership area where personal book lists can be compiled and book suggestions can be made. Personal book lists are made by selecting the title from the appropriate page/category which can then be viewed and edited accordingly. The suggestion list is entered manually by the user and can be edited or deleted as desired. Within these tables I have used prepared statements in the hope of preventing SQL injection.

I have tried to observe the dry principle where possible but I had problems using my existing Database connecter script with the bootstrap part of the project, and had to construct another connector using the PDO base class for this purpose.

I have included some examples of Jquery animations to meet the assignment specifications but haven't included too many as they wouldn't fit in with the look of the site/application.

To deploy this project you just need to unzip, take the files and folder out of the 'Project Files' folder and place within the HTDOCS folder or similar depending on what system is used to view the application. I have also included a database dump file along with a folder constaining a backup of the tables used in this project.

One thing I have not managed to include in this project is a secondary filter on the search facility within the application. I left this part of the assignment until last and ran out of time unfortunately. I apologise for some of the rough edges on this assignment, I was doing this project on my own, as I couldn't manage to find a working partner, and I didn't have time to polish my work as much as I would have liked.