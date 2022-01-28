CREATE TABLE users (
   id_user INT AUTO_INCREMENT PRIMARY KEY NOT NULL,

   name_user VARCHAR(50),
   first_name_user VARCHAR(50),
   login_user VARCHAR(50),
   pw_user VARCHAR(100),
   email_user VARCHAR(100),
);

CREATE TABLE genre (
   id_genre INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
   name_genre VARCHAR(50)
);
CREATE TABLE track (
   id_track INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
   name_track VARCHAR(50),
   url_track VARCHAR(255)
);
CREATE TABLE playlist (
   id_playlist INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
   id_user INT,
   id_genre INT,
   name_playlist VARCHAR(50),

   CONSTRAINT fk_user_playlist FOREIGN KEY(id_user) REFERENCES users(id_user),
   CONSTRAINT fk_genre_playlist FOREIGN KEY(id_genre) REFERENCES genre(id_genre)
);
CREATE TABLE form (
   id_track INT,
   id_playlist INT,
   PRIMARY KEY(id_track, id_playlist),
   
   CONSTRAINT fk_track_form FOREIGN KEY(id_track) REFERENCES track(id_track),
   CONSTRAINT fk_playlist_form FOREIGN KEY(id_playlist) REFERENCES playlist(id_playlist)
);


