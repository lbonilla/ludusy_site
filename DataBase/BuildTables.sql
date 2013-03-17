drop table Post;

create table Post
(`Id` int(10) Unsigned Primary KEY AUTO_INCREMENT, 
Tittle varchar (50),
Description varchar(200),
Content  Varchar(800),
PublishDate DATETIME NOT NULL,	
PUublish
ExpireDate datetime);

create table Category(ID Integer, Name Integer);	

create table PostCategory(Post Integer, Category Integer);

//Message Scroll Horizontal

