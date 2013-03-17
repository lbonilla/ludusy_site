insert into Post(Tittle,Description, Content,PublishDate) values("Test Post * Last","Las Post for test the last past is display at the beginning",'<h1>Last Post for test if is displayed at the beggining of the posts section</h1>',NOW());
insert into Post(Tittle,Description, Content,PublishDate) values("Second Post","Second Post Summary",'<h1>My Content of first commit</h1>',NOW());
insert into Post(Tittle,Description, Content,PublishDate) values("Third Post","Thir Post Summary",'<h1>My Content of first commit</h1>',NOW());
insert into Post(Tittle,Description, Content,PublishDate) values("Other Post","First Post",'<h1>My Content of first commit</h1>',NOW());
insert into Post(Tittle,Description, Content,PublishDate) values("Other Post","First Post",'<h1>My Content of first commit</h1>',NOW());
insert into Post(Tittle,Description, Content,PublishDate) values("Another Post","First Post",'<h1>My Content of first commit</h1>',NOW());
insert into Post(Tittle,Description, Content,PublishDate) values("Last Post","First Post",'<h1>My Content of first commit</h1>',NOW());




SELECTS
SELECT Id, Tittle,Description, DATE_FORMAT(PublishDate, '%M %D, %Y') AS PubDate FROM Post ORDER BY PublishDate DESC LIMIT 6 ;''

