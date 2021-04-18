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
VALUES (4, 'The Fighter Collection', 'United Kingdom', 5);
INSERT INTO Publisher (PublisherID, PublisherName, PublisherOrigin, GameID) 
VALUES (5, 'Rockstar Games', 'American', 6);
INSERT INTO Publisher (PublisherID, PublisherName, PublisherOrigin, GameID) 
VALUES (5, 'Rockstar Games', 'American', 7);
INSERT INTO Publisher (PublisherID, PublisherName, PublisherOrigin, GameID) 
VALUES (6, 'Ludeon Studios', 'Canada', 8);
INSERT INTO Publisher (PublisherID, PublisherName, PublisherOrigin, GameID) 
VALUES (7, 'Microsoft Studios', 'American', 9);
INSERT INTO Publisher (PublisherID, PublisherName, PublisherOrigin, GameID) 
VALUES (8, 'Valve Corporation', 'American', 10);

INSERT INTO Developer (DeveloperID, DeveloperName, DeveloperOrigin, GameID)
VALUES (1, 'Battlestate Games', 'Russia', 1);
INSERT INTO Developer (DeveloperID, DeveloperName, DeveloperOrigin, GameID)
VALUES (2, 'Riot Games', 'United States of America', 2);
INSERT INTO Developer (DeveloperID, DeveloperName, DeveloperOrigin, GameID)
VALUES (2, 'Riot Games', 'United States of America', 3);
INSERT INTO Developer (DeveloperID, DeveloperName, DeveloperOrigin, GameID)
VALUES (3, 'Mediatonic', 'United Kingdom', 4);
INSERT INTO Developer (DeveloperID, DeveloperName, DeveloperOrigin, GameID)
VALUES (4, 'Eagle Dynamics', 'Switzerland', 5);
INSERT INTO Developer (DeveloperID, DeveloperName, DeveloperOrigin, GameID)
VALUES (5, 'Rockstar Games', 'American', 6);
INSERT INTO Developer (DeveloperID, DeveloperName, DeveloperOrigin, GameID)
VALUES (5, 'Rockstar Games', 'American', 7);
INSERT INTO Developer (DeveloperID, DeveloperName, DeveloperOrigin, GameID)
VALUES (6, 'Ludeon Studios', 'Canada', 8);
INSERT INTO Developer (DeveloperID, DeveloperName, DeveloperOrigin, GameID)
VALUES (6, 'Rare', 'United Kingdom', 9);
INSERT INTO Developer (DeveloperID, DeveloperName, DeveloperOrigin, GameID)
VALUES (6, 'Valve', 'American', 10);

INSERT INTO Consumer (ConsumerID, ConsumerName, GameID)
VALUES (1, 'John Doe', 1);
INSERT INTO Consumer (ConsumerID, ConsumerName, GameID)
VALUES (1, 'John Doe', 2);
INSERT INTO Consumer (ConsumerID, ConsumerName, GameID)
VALUES (2, 'Nick Bennett', 3);
INSERT INTO Consumer (ConsumerID, ConsumerName, GameID)
VALUES (2, 'Dustin Reff', 4);
INSERT INTO Consumer (ConsumerID, ConsumerName, GameID)
VALUES (3, 'Dustin Reff', 5);
INSERT INTO Consumer (ConsumerID, ConsumerName, GameID)
VALUES (3, 'Dustin Reff', 6);
INSERT INTO Consumer (ConsumerID, ConsumerName, GameID)
VALUES (4, 'yassuo', 10);

INSERT INTO Review (ReviewID, Rating, ConsumerID, GameID)
VALUES (1, 5, 1, 2);
INSERT INTO Review (ReviewID, Rating, ConsumerID, GameID)
VALUES (2, 1, 2, 3);
INSERT INTO Review (ReviewID, Rating, ConsumerID, GameID)
VALUES (3, 3, 3, 6);

INSERT INTO `Stream` (StreamID, StreamLink, ConsumerID, GameID)
VALUES (1, 'https://www.twitch.tv/yassuo', 4, 2);

INSERT INTO `Mod` (ModID, ModDetails, ConsumerID, GameID)
VALUES (1, 'CSGO STAR WARS', 1, 10);

SELECT *
From 

COMMIT;
