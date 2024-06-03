CREATE DATABASE SONGS;

USE SONGS;

CREATE TABLE Queen (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    band VARCHAR(255),
    note VARCHAR(255)
);
CREATE TABLE DepecheMode (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    band VARCHAR(255),
    note VARCHAR(255)
);
CREATE TABLE PinkFloyd (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    band VARCHAR(255),
    note VARCHAR(255)
);
CREATE TABLE REM (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    band VARCHAR(255),
    note VARCHAR(255)
);
CREATE TABLE Metallica (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    band VARCHAR(255),
    note VARCHAR(255)
);
CREATE TABLE FooFighters (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    band VARCHAR(255),
    note VARCHAR(255)
);
CREATE TABLE GunsNRoses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    band VARCHAR(255),
    note VARCHAR(255)
);
CREATE TABLE Nirvana (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    band VARCHAR(255),
    note VARCHAR(255)
);

USE SONGS;

INSERT INTO Queen (title, band, note) VALUES ('Is This The World We Created?', 'Queen', '5');
INSERT INTO Queen (title, band, note) VALUES ('Love Of My Life', 'Queen', '5');
INSERT INTO Queen (title, band, note) VALUES ('I Want To Break Free', 'Queen', '5');
INSERT INTO Queen (title, band, note) VALUES ('Fat Bottomed Girls', 'Queen', '4');
INSERT INTO Queen (title, band, note) VALUES ('Somebody To Love', 'Queen', '5');
INSERT INTO Queen (title, band, note) VALUES ('Crazy Little Thing Called Love', 'Queen', '5');
INSERT INTO Queen (title, band, note) VALUES ('39', 'Queen', '4');
INSERT INTO Queen (title, band, note) VALUES ('Dont Stop Me Now', 'Queen', '5');
INSERT INTO DepecheMode (title, band, note) VALUES ('Enjoy The Silence', 'Depeche Mode', '5');
INSERT INTO DepecheMode (title, band, note) VALUES ('Personal Jesus', 'Depeche Mode', '4');
INSERT INTO PinkFloyd (title, band, note) VALUES ('Money', 'Pink Floyd', '5');
INSERT INTO PinkFloyd (title, band, note) VALUES ('Another Brick In The Wall', 'Pink Floyd', '5');
INSERT INTO PinkFloyd (title, band, note) VALUES ('Wish You Were Here', 'Pink Floyd', '5');
INSERT INTO REM (title, band, note) VALUES ('Losing My Religion', 'R.E.M.', '3');
INSERT INTO REM (title, band, note) VALUES ('Man On Thre Moon', 'R.E.M.', '3');
INSERT INTO GunsNRoses (title, band, note) VALUES ('Sweet Child O Mine', 'Guns N Roses', '5');
INSERT INTO GunsNRoses (title, band, note) VALUES ('November Rain', 'Guns N Roses', '3,5');
INSERT INTO GunsNRoses (title, band, note) VALUES ('Dont Cry', 'Guns N Roses', '4,5');
INSERT INTO GunsNRoses (title, band, note) VALUES ('Patience', 'Guns N Roses', '5');
INSERT INTO GunsNRoses (title, band, note) VALUES ('Yesterdays', 'Guns N Roses', '4');
INSERT INTO Nirvana (title, band, note) VALUES ('Rape Me', 'Nirvana', '3,5');
INSERT INTO Nirvana (title, band, note) VALUES ('About A Girl', 'Nirvana', '5');
INSERT INTO Nirvana (title, band, note) VALUES ('Pennyroyal Tea', 'Nirvana', '4');
INSERT INTO Nirvana (title, band, note) VALUES ('Come As You Are', 'Nirvana', '4');
INSERT INTO Nirvana (title, band, note) VALUES ('Polly', 'Nirvana', '3,5');
INSERT INTO Nirvana (title, band, note) VALUES ('Heart-Shaped Box', 'Nirvana', '5');
INSERT INTO Nirvana (title, band, note) VALUES ('Where Did You Sleep Last Night', 'Nirvana', '4');
INSERT INTO Nirvana (title, band, note) VALUES ('Smells Like Teen Spirit', 'Nirvana', '5');
INSERT INTO Nirvana (title, band, note) VALUES ('Jesus Doesnt Want Me For A Sunbeam', 'Nirvana', '4');
INSERT INTO Nirvana (title, band, note) VALUES ('And I Love Her', 'Nirvana', '5');
INSERT INTO Nirvana (title, band, note) VALUES ('Lithium', 'Nirvana', '5');
INSERT INTO Nirvana (title, band, note) VALUES ('The Man Who Sold The World', 'Nirvana', '5');
INSERT INTO Nirvana (title, band, note) VALUES ('All Apologies', 'Nirvana', '3');
INSERT INTO Nirvana (title, band, note) VALUES ('Lake Of Fire', 'Nirvana', '3');
INSERT INTO Nirvana (title, band, note) VALUES ('Dumb', 'Nirvana', '5');
INSERT INTO Nirvana (title, band, note) VALUES ('Oh, Me', 'Nirvana', '3,5');
INSERT INTO Nirvana (title, band, note) VALUES ('Frances Farmer Will Have Her Revenge On Seattle', 'Nirvana', '4');
INSERT INTO Nirvana (title, band, note) VALUES ('Something In The Way', 'Nirvana', '3');
INSERT INTO Nirvana (title, band, note) VALUES ('On A Plain', 'Nirvana', '4');
INSERT INTO Nirvana (title, band, note) VALUES ('Drain You', 'Nirvana', '4');
