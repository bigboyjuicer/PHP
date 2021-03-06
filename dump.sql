PGDMP     #    7                 y            php_project    13.3    13.2     ?           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            ?           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            ?           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            ?           1262    16875    php_project    DATABASE     h   CREATE DATABASE php_project WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Russian_Russia.1251';
    DROP DATABASE php_project;
                postgres    false            ?            1259    16881    doctor    TABLE     ?   CREATE TABLE public.doctor (
    id integer NOT NULL,
    first_name character varying(45) NOT NULL,
    last_name character varying(45) NOT NULL,
    type character varying(45) NOT NULL
);
    DROP TABLE public.doctor;
       public         heap    postgres    false            ?            1259    16876    profile    TABLE     |   CREATE TABLE public.profile (
    username character varying(150) NOT NULL,
    password character varying(150) NOT NULL
);
    DROP TABLE public.profile;
       public         heap    postgres    false            ?            1259    16921    record    TABLE     ?   CREATE TABLE public.record (
    id integer NOT NULL,
    "time" time without time zone NOT NULL,
    date date NOT NULL,
    doctor integer NOT NULL,
    username character varying NOT NULL
);
    DROP TABLE public.record;
       public         heap    postgres    false            ?            1259    16919    record_id_seq    SEQUENCE     ?   ALTER TABLE public.record ALTER COLUMN id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public.record_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);
            public          postgres    false    203            ?          0    16881    doctor 
   TABLE DATA           A   COPY public.doctor (id, first_name, last_name, type) FROM stdin;
    public          postgres    false    201   ?       ?          0    16876    profile 
   TABLE DATA           5   COPY public.profile (username, password) FROM stdin;
    public          postgres    false    200   [       ?          0    16921    record 
   TABLE DATA           D   COPY public.record (id, "time", date, doctor, username) FROM stdin;
    public          postgres    false    203   ?       ?           0    0    record_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.record_id_seq', 8, true);
          public          postgres    false    202            .           2606    16885    doctor doctor_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.doctor
    ADD CONSTRAINT doctor_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.doctor DROP CONSTRAINT doctor_pkey;
       public            postgres    false    201            0           2606    16928    record record_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.record
    ADD CONSTRAINT record_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.record DROP CONSTRAINT record_pkey;
       public            postgres    false    203            ,           2606    16880    profile user_pkey 
   CONSTRAINT     U   ALTER TABLE ONLY public.profile
    ADD CONSTRAINT user_pkey PRIMARY KEY (username);
 ;   ALTER TABLE ONLY public.profile DROP CONSTRAINT user_pkey;
       public            postgres    false    200            1           2606    16929    record record_doctor_fkey    FK CONSTRAINT     ?   ALTER TABLE ONLY public.record
    ADD CONSTRAINT record_doctor_fkey FOREIGN KEY (doctor) REFERENCES public.doctor(id) NOT VALID;
 C   ALTER TABLE ONLY public.record DROP CONSTRAINT record_doctor_fkey;
       public          postgres    false    203    201    2862            2           2606    16934    record record_user_fkey    FK CONSTRAINT     ?   ALTER TABLE ONLY public.record
    ADD CONSTRAINT record_user_fkey FOREIGN KEY (username) REFERENCES public.profile(username) NOT VALID;
 A   ALTER TABLE ONLY public.record DROP CONSTRAINT record_user_fkey;
       public          postgres    false    2860    200    203            ?   [   x????0C??a?`?I@?4?HL??X?ވ?t?ӳk???^??8?GƂV??????6?ɴ?'??lc??????]?)??????8B      ?   1   x?+?,(.1L???M?.??320414?J?LOʯ?*?LN-B?????? ?7h      ?      x?????? ? ?     