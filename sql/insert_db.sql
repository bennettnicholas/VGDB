use `mydb`;

-- starter data for video games
INSERT INTO VideoGame (GameID, GameName, Genre, CurrentPrice) 
VALUES (1, 'Escape From Tarkov' , 'FPS', 59.99);
INSERT INTO VideoGame (GameID, GameName, Genre, CurrentPrice) 
VALUES (2, 'League of Legends' , 'MOBA', 0);
INSERT INTO VideoGame (GameID, GameName, Genre, CurrentPrice) 
VALUES (3, 'Valorant' , 'FPS', 0);
INSERT INTO VideoGame (GameID, GameName, Genre, CurrentPrice) 
VALUES (4, 'Fall Guys: Ultimate Knockout' , 'Battle Royale', 19.99);
INSERT INTO VideoGame (GameID, GameName, Genre, CurrentPrice) 
VALUES (5, 'Digital Combat Simulator World' , 'Simulator', 0);
INSERT INTO VideoGame (GameID, GameName, Genre, CurrentPrice) 
VALUES (6, 'Grand Theft Auto V' , 'Open World', 59.99);
INSERT INTO VideoGame (GameID, GameName, Genre, CurrentPrice) 
VALUES (7, 'Red Dead Redemption II' , 'Open World', 59.99);
INSERT INTO VideoGame (GameID, GameName, Genre, CurrentPrice) 
VALUES (8, 'RimWorld' , 'Colony Sim', 29.99);
INSERT INTO VideoGame (GameID, GameName, Genre, CurrentPrice) 
VALUES (9, 'Sea of Thieves' , 'Action-Adventure', 59.99);
INSERT INTO VideoGame (GameID, GameName, Genre, CurrentPrice) 
VALUES (10, 'CSGO' , 'FPS', 14.99);

-- sample data for producers
INSERT INTO Publisher (PublisherID, PublisherName, PublisherOrigin, GameID) 
VALUES (1, 'Battlestate Games', 'Russia', 1);
INSERT INTO Publisher (PublisherID, PublisherName, PublisherOrigin, GameID) 
VALUES (2, 'Riot Games', 'United States of America', 2);
INSERT INTO Publisher (PublisherID, PublisherName, PublisherOrigin, GameID) 
VALUES (2, 'Riot Games', 'United States of America', 3);
INSERT INTO Publisher (PublisherID, PublisherName, PublisherOrigin, GameID) 
VALUES (3, 'Epic Games', 'United States of America', 4);
INSERT INTO Publisher (PublisherID, PublisherName, PublisherOrigin, GameID) 
VALUES (4, 'The Fighter Collection', 'United Kingdom', 3);

SELECT *
FROM VideoGame

COMMIT;
