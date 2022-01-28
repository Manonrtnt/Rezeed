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
    url_track text,

    id_genre int,
    constraint fk_id_genre_track foreign key (id_genre) references genre(id_genre)
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

insert into track
    values 
        (null, "Vivaldi - Les quatres saisons", "GRxofEmo3HA", 1),                
        (null, "Beethoven - Symphonie au clair de lune", "4Tr0otuiQuU", 1),
        (null, "Chopin - Nocturne n°9", "9E6b3swbnWg", 1),
        (null, "Mozart - Rondo Alla Turca", "quxTnEEETbo", 1),
        (null, "Liszt - La Campanella", "H1Dvg2MxQn8", 1),

        (null, "Daft Punk - Around the world", "K0HSD_i2DvA", 2),
        (null, "Liquido - Narcotic", "PJ7E40Ec5ec", 2),
        (null, "Stromae - Alors on danse", "VHoT4N43jK8", 2),
        (null, "Darude - Sandstorm", "y6120QOlsfU", 2),
        (null, "Tiesto - Traffic!", "-qgzNwdkV4s", 2),

        (null, "Lucky Peterson - Honey Bee", "UqY1lqrD5Ws", 3),                      
        (null, "Hiromi Uehara - Desire", "EFeouD2IWSA", 3),
        (null, "Sing Sing Sing - Sing Sing Sing", "_napNH0D0Ws", 3),
        (null, "Newen Afrobeat - Opposite People ", "mFSRCG4DrmI", 3),
        (null, "Gary B.B. Coleman - The Sky is Crying", "71Gt46aX9Z4", 3),

        (null, "Michael Jackson - Billie Jean", "Zi_XLOBDo_Y", 4),                    
        (null, "Madonna - La Isla Bonita", "zpzdgmqIHOQ", 4),
        (null, "Amy Winehouse - Back To Black", "TJAfLE39ZZ8", 4),
        (null, "Lady Gaga - Bad Romance", "qrO4YZeyl0I", 4),
        (null, "Ed Sheeran - Shape of You", "JGwWNGJdvx8", 4),

        (null, "IAM - Demain c'est loin", "JaqLOsO6dTw", 5),                          
        (null, "NTM - Qu'est ce qu'on attends", "duZh2lOgl5s", 5),
        (null, "Tupac - All Eyez on me", "H1HdZFgR-aA", 5),
        (null, "Eminem - Lose Yourself", "_Yhyp-_hX2s", 5),
        (null, "Dr. Dre - Puppet Master", "eTPjOgOaOl8", 5),
        
        (null, "Bob Marley & The Wailers - Could You Be Loved", "pOm4MYha9jg", 6),    
        (null, "Max Romeo - Chase The Devil", "XcMNfX5yh28", 6),                     
        (null, "Groudation - Babylon Rule Dem", "cUv4f3Bw73M", 6),
        (null, "Alpha Blondy - Jérusalem", "WcqK9Ls7Eos", 6),
        (null, "Black Uhuru - Puff She Puff", "DSRIxnLx-hs", 6),

        (null, "Leo Moracchioli - Dance Monkey ", "rl9FFZZnWWo", 7),    
        (null, "Dire Straits - Walk of life", "kd9TlGDZGkI", 7),                     
        (null, "George Thorogood - Bad to the bone", "fazFLfk", 7),
        (null, "Metallica - Master Of Puppets", "kV-2Q8QtCY4", 7),
        (null, "Genesis - Jesus he knows me", "JXFXZGDMtqA", 7)
;
