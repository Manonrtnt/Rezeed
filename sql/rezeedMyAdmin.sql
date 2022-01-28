drop database if exists rezeed;
create database rezeed CHARACTER SET utf8 COLLATE utf8_general_ci; 
use rezeed;

create table genre (
    id_genre int auto_increment primary key not null, 
    name_genre varchar(50)
);

create table track (
    id_track int auto_increment primary key not null, 
    name_track varchar(50),
    url_track text
);

create table users (
    id_user int auto_increment primary key not null, 
    name_user varchar(50), 
    first_name_user varchar(50),
    login_user varchar(50),
    pw_user varchar(150),
    email_user varchar(100),
    
    id_genre int not null, 
    constraint fk_id_genre_user foreign key (id_genre) references genre(id_genre)
);

create table playlist (
    id_playlist int auto_increment primary key not null, 
    name_playlist varchar(50), 
    
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

insert into genre
	values 
		(null, "Classique"),
        (null, "Electro"),
        (null, "Jazz"),
        (null, "Pop"),
        (null, "Rap"),
        (null, "Reggae"),
        (null, "Rock");

insert into users
	values
		(null, "root", "root", "root", "dc76e9f0c0006e8f919e0c515c66dbba3982f785", "root@root.root", 7);