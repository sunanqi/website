/* This file is for records only.
The following commands were excuted within phpMyAdmin console */

CREATE TABLE users (
    userid int AUTO_INCREMENT PRIMARY KEY NOT NULL,
    username TINYTEXT NOT NULL,
    user_email TINYTEXT NOT NULL,
    user_password LONGTEXT,
    signup_date DATE NOT NULL
);

INSERT INTO users (username, user_email, user_password, signup_date) VALUES (?, ?, ?, ?)

CREATE TABLE user_roles (
    userid int AUTO_INCREMENT PRIMARY KEY NOT NULL,
    username TINYTEXT NOT NULL,
    user_role TINYTEXT NOT NULL
);

INSERT INTO user_roles VALUES (1, "eee", "superadmin")
UPDATE user_roles SET user_role = "data_contrib" WHERE username="eee"

CREATE TABLE team_china_roster (
    player_id int PRIMARY KEY NOT NULL,
    in_game_nick TINYTEXT NOT NULL,
    cup_points int,
    adv_points int,
    garage_power smallint,
    is_active boolean,
    update_date date
)

INSERT INTO team_china_roster (player_id, in_game_nick, cup_points, garage_power, is_active, update_date) VALUES (44, "CN🍎肉松爸爸", 745519, 5919, TRUE, '2020-08-05')

INSERT INTO team_china_roster VALUES
(44, "CN🍎肉松爸爸", 807579, NULL, 6093, TRUE, '2020-09-01')

INSERT INTO team_china_roster VALUES
(9, "战狼96🇨🇳", 4575180, 692357, 5796, TRUE, '2020-09-01')

CREATE TABLE team_china_scores (
    player_id int PRIMARY KEY NOT NULL,
    in_game_nick TINYTEXT NOT NULL,
    cup_points int,
    adv_points int,
    garage_power smallint,
    is_active boolean,
    update_date date
)

CREATE TABLE team_china_scores (
    matching_date DATE,
    event_name TINYTEXT,
    round TINYINT,
    our_name TINYTEXT,
    our_trophy INT,
    our_rank TINYINT,
    opponent_name TINYTEXT,
    opponent_trophy INT,
    opponent_rank TINYINT,
    match_result TINYTEXT,
    our_score INT,
    opponent_score INT,
    our_trophy_change INT,
    our_top_player TINYTEXT,
    our_top_score INT,
    our_2nd_player TINYTEXT,
    our_2nd_score INT,
    our_3rd_player TINYTEXT,
    our_3rd_score INT
)

INSERT INTO team_china_scores VALUES('2020-09-06', 'Member Berries', 2, "Team China", 13981, 39, "CelebrityHeadz", 11365, 93, "in process", 3091, 1428, NULL, "", NULL, "", NULL, "", NULL)
INSERT INTO team_china_scores VALUES('2020-09-04', 'Member Berries', 1, "Team China", 13845, NULL, "POLSKA", NULL, NULL, "Win", 3551, 967, 133, "CN|PR-five", 47013, "CN-极速飞飞", 45902, "Green wind", 45458)

INSERT INTO team_china_scores VALUES('2020-09-02', 'Breathe in Breathe out', 3, "Team China", 13707, NULL, "French Climber", 11164, NULL, "Win", 2995, 1523, 138, "CN|PR-five", 45394, "CN⛄锅盖", 44691, "CN-谷粒", 43270)

2020-09-02, Breathe in Breathe out, 3, Team China, 13707, ,French Climber, 11164, , Win, 2995, 1523, 138, CN|PR-five, 45394, CN⛄锅盖, 44691, CN-谷粒, 43270

2020-08-31, Breathe in Breathe out, 2, Team China, 13572, , CelebrityHeadz, 11365, , Win, 3022, 1494, 135, CN|PR-five, 43001, CN⛄锅盖, 42981, CN-极速飞飞, 42137
