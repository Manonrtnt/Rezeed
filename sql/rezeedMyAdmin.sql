drop database if exists rezeed;
create database rezeed CHARACTER SET utf8 COLLATE utf8_general_ci; 
use rezeed;

create table genre (
	id_genre int auto_increment primary key not null, 
    genre_name varchar(50)
);

create table track (
	id_track int auto_increment primary key not null, 
    track_name varchar(50),
    url text
);

create table users (
	id_user int auto_increment primary key not null, 
    user_name varchar(50), 
    user_first_name varchar(50),
    user_login varchar(50),
    user_mdp varchar(150),
    user_preference varchar(25),
    
	id_genre int not null, 
    constraint fk_id_genre_user foreign key (id_genre) references genre(id_genre)
);

create table playlist (
	id_playlist int auto_increment primary key not null, 
    playlist_name varchar(50), 
    
	id_user int not null, 
    constraint fk_id_user_playlist foreign key (id_user) references users(id_user)
);

create table form (
	id_playlist int not null,
    id_track int not null,
    
    primary key(id_playlist, id_track),
    constraint fk_id_playlist_form foreign key(id_playlist) references playlist(id_playlist),
    constraint fk_id_track_form foreign key(id_track) references track(id_track)
);