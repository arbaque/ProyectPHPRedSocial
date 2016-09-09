CREATE SEQUENCE public.usuario_id_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 8
  CACHE 1;
 
create table usuario(
    id integer not null DEFAULT nextval('usuario_id_seq'::regclass) ,
    pnombre character(50) not null,
    snombre character(50) not null,
    usuario character(50),
    email character(255) not null,
    clave character(60) not null,
    codigo character(20),
    estado boolean ,
    administrador boolean 
);

/* insert into user(email,password,is_active,is_admin,created_at) value ("admin",sha1(md5("admin")),1,1,NOW()); */


CREATE SEQUENCE public.recuperar_id_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 8
  CACHE 1;
 
create table recuperar (
    id integer not null DEFAULT nextval('recuperar_id_seq'::regclass) ,
    usuario_id integer not null,
    codigo character(20) not null,
    activar boolean not null default 0::boolean,
    fechacreacion date not null/*,
    foreign key(user_id) references user(id)*/
);


CREATE SEQUENCE public.nivel_id_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 8
  CACHE 1;
 
create table nivel(
    id integer not null DEFAULT nextval('nivel_id_seq'::regclass) ,
    nombre character(50)
);
insert into nivel (nombre) values ('Publico');
insert into nivel (nombre) values ('Solo amigos');
insert into nivel (nombre) values ('Amigos de mis amigos');


CREATE SEQUENCE public.pais_id_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 8
  CACHE 1;
 
create table pais(
    id integer not null DEFAULT nextval('pais_id_seq'::regclass) ,
    nombre character(50),
    prefijo character(50)
);

insert into pais(nombre,prefijo) values ('ECUADOR','EC');

CREATE SEQUENCE public.estadocivil_id_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 8
  CACHE 1;
 
create table estadocivil(
    id integer not null DEFAULT nextval('estadocivil_id_seq'::regclass) ,
    nombre character(50)
);

insert into estadocivil(nombre) values ('Soltero'),('Casado');



create table perfil(
    fechanacimiento date not null,
    genero character(1) not null,
    pais_id integer ,
    image character(255),
    image_header character(255),
    titulo character(255),
    bio character(255),
    likes character(2000),
    dislikes character(2000),
    direccion character(255) not null,
    telefono character(255) not null,
    email character(255) not null,
    usuario_id integer not null,
    nivel_id integer ,
    genero_id integer /* ,
    foreign key (sentimental_id) references sentimental(id),
    foreign key (country_id) references country(id),
    foreign key (level_id) references level(id),
    foreign key (user_id) references user(id)*/
);


CREATE SEQUENCE public.album_id_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 8
  CACHE 1;
 
create table album(
    id integer not null DEFAULT nextval('album_id_seq'::regclass) ,
    titulo character(200) not null,
    contenido character(500) not null,
    usuario_id integer not null,
    nivel_id integer not null
   
);


CREATE SEQUENCE public.imagen_id_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 8
  CACHE 1;
 
create table imagen(
    id integer not null DEFAULT nextval('imagen_id_seq'::regclass) ,
    ruta character(255) not null,
    titulo character(200) not null,
    contenido character(500) not null,
    usuario_id integer not null,
    nivel_id integer not null,
    album_id integer,
    fechacreacion date not null /*,
    foreign key (album_id) references album(id),
    foreign key (user_id) references user(id),
    foreign key (level_id) references level(id)*/
);

/**
* post_type_id
* 1.- status
* 2.- event
**/
CREATE SEQUENCE public.post_id_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 8
  CACHE 1;
 
create table post(
    id integer  not null DEFAULT nextval('post_id_seq'::regclass) ,
    titulo integer not null,
    contenido text not null,
    lat float not null,
    lng float not null,
    fechainicio date,
    fechafin date,
    autor_ref_id integer not null,
    receptor_ref_id integer not null,
    nivel_id integer not null,
    post_tipo_id integer default 1,
    fechacreacion date not null/*,
    foreign key (level_id) references level(id)*/
);

create table post_imagen(
    post_id integer not null,
    imagen_id integer not null /*,
    foreign key (post_id) references post(id),
    foreign key (image_id) references image(id)*/
);

/**
* type_id:
* 1.- post
* 2.- image
**/
CREATE SEQUENCE public.sentimiento_id_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 8
  CACHE 1;
 
create table sentimiento(
    id integer not null DEFAULT nextval('sentimiento_id_seq'::regclass) ,
    type_id integer not null default 1,
    ref_id integer not null,
    user_id integer not null,
    created_at date not null/*,
    foreign key (user_id) references user(id)*/
);


CREATE SEQUENCE public.comentarios_id_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 8
  CACHE 1;
 
create table comentarios(
    id integer not null DEFAULT nextval('comentarios_id_seq'::regclass) ,
    tipo_id integer not null,
    ref_id integer not null,
    usuario_id integer not null,
    contenido character(2000) not null,
    comentario_id integer,
    fechacreacion date not null /*,
    foreign key (user_id) references user(id),
    foreign key (comment_id) references comment(id)*/
);

CREATE SEQUENCE public.amigos_id_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 8
  CACHE 1;
 
create table amigos(
    id integer not null DEFAULT nextval('amigos_id_seq'::regclass) ,
    remitente_id integer not null,
    receptor_id integer,
    aceptar boolean not null default 0::boolean,
    leido boolean not null default 0::boolean,
    fechacreacion date not null/*,
    foreign key (sender_id) references user(id),
    foreign key (receptor_id) references user(id)*/
);

CREATE SEQUENCE public.conversacion_id_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 8
  CACHE 1;
 
create table conversacion(
    id integer  not null DEFAULT nextval('conversacion_id_seq'::regclass) ,
    remitente_id integer not null,
    receptor_id integer,
    fechacreacion date not null /*,
    foreign key (sender_id) references user(id),
    foreign key (receptor_id) references user(id)*/
);

CREATE SEQUENCE public.mensajes_id_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 8
  CACHE 1;
 
create table mensajes(
    id integer not null DEFAULT nextval('mensajes_id_seq'::regclass) ,
    contenido text not null,
    usuario_id integer not null,
    conversacion_id integer,
    fechacreacion date not null,
    leido boolean not null default 0::boolean /*,
    foreign key (user_id) references user(id),
    foreign key (conversation_id) references conversation(id)*/
);

/*
not_type_id:
1.- like, 2.- comment
type:
1.- post, 2.- image
*/
CREATE SEQUENCE public.notificacion_id_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 8
  CACHE 1;
 
create table notificacion(
    id integer not null DEFAULT nextval('notificacion_id_seq'::regclass) ,
    not_tipo_id integer not null,
    tipo_id integer not null,
    ref_id integer not null,
    receptor_id integer not null,
    remitente_id integer not null,
    leido boolean not null default 0::boolean,
    fechacreacion date not null/*,
    foreign key (sender_id) references user(id),
    foreign key (receptor_id) references user(id)*/
);