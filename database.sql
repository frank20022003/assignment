-- Create the database (if it doesn't exist)
CREATE DATABASE IF NOT EXISTS playerdb;

-- Switch to the database
USE playerdb;

-- Create the table to store player information
CREATE TABLE players (
    player_id INT AUTO_INCREMENT PRIMARY KEY,
    player_name VARCHAR(255) NOT NULL,
    player_role VARCHAR(255) NOT NULL
);

-- Insert player data
INSERT INTO players (player_name, player_role)
VALUES
    ('Alice', 'Forward'),
    ('Bob', 'Midfielder'),
    ('Charlie', 'Defender');

-- Retrieve and display player data
SELECT * FROM players;
