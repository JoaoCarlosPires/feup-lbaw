/* DROPs */

DROP TABLE IF EXISTS "user" CASCADE;
DROP TABLE IF EXISTS client CASCADE;
DROP TABLE IF EXISTS tag CASCADE;
DROP TABLE IF EXISTS preferences CASCADE;
DROP TABLE IF EXISTS product CASCADE;
DROP TABLE IF EXISTS categories CASCADE;
DROP TABLE IF EXISTS productTag CASCADE;
DROP TABLE IF EXISTS "order" CASCADE;
DROP TABLE IF EXISTS review CASCADE;
DROP TABLE IF EXISTS product_review CASCADE;
DROP TABLE IF EXISTS return CASCADE;
DROP TABLE IF EXISTS shoppingBasket CASCADE;
DROP TABLE IF EXISTS shoppingItems CASCADE;
DROP TABLE IF EXISTS inventory CASCADE;
DROP TABLE IF EXISTS wish_list CASCADE;
DROP TABLE IF EXISTS transfer CASCADE;
DROP TABLE IF EXISTS transferPayment CASCADE;
DROP TABLE IF EXISTS shop CASCADE;
DROP TABLE IF EXISTS album CASCADE;
DROP TABLE IF EXISTS other CASCADE;

DROP TYPE IF EXISTS country CASCADE;
DROP TYPE IF EXISTS productType CASCADE;
DROP TYPE IF EXISTS genre CASCADE;

DROP FUNCTION IF EXISTS verify_stock() CASCADE;
DROP FUNCTION IF EXISTS update_availability() CASCADE;
DROP FUNCTION IF EXISTS update_product_rating() CASCADE;

DROP TRIGGER IF EXISTS check_quantity_bought ON shoppingItems;
DROP TRIGGER IF EXISTS update_availability ON shop;
DROP TRIGGER IF EXISTS product_score ON product_review;

/* TYPES */

CREATE TYPE country AS ENUM ('United States','Canada','Afghanistan','Albania','Algeria','American Samoa','Andorra','Angola','Anguilla','Antarctica','Antigua and/or Barbuda','Argentina','Armenia','Aruba','Australia','Austria','Azerbaijan','Bahamas','Bahrain','Bangladesh','Barbados','Belarus','Belgium', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia', 'Bosnia and Herzegovina', 'Botswana', 'Bouvet Island', 'Brazil', 'British Indian Ocean Territory', 'Brunei Darussalam', 'Bulgaria', 'Burkina Faso', 'Burundi', 'Cambodia', 'Cameroon', 'Cape Verde', 'Cayman Islands', 'Central African Republic', 'Chad', 'Chile', 'China', 'Christmas Island', 'Cocos (Keeling) Islands', 'Colombia', 'Comoros', 'Congo', 'Cook Islands', 'Costa Rica', 'Croatia (Hrvatska)', 'Cuba', 'Cyprus', 'Czech Republic', 'Denmark', 'Djibouti', 'Dominica', 'Dominican Republic', 'East Timor', 'Ecudaor', 'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Ethiopia', 'Falkland Islands (Malvinas)', 'Faroe Islands', 'Fiji', 'Finland', 'France', 'France, Metropolitan', 'French Guiana', 'French Polynesia', 'French Southern Territories', 'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 'Gibraltar', 'Greece', 'Greenland', 'Grenada', 'Guadeloupe', 'Guam', 'Guatemala', 'Guinea', 'Guinea-Bissau', 'Guyana', 'Haiti', 'Heard and Mc Donald Islands', 'Honduras', 'Hong Kong', 'Hungary', 'Iceland', 'India', 'Indonesia', 'Iran (Islamic Republic of)', 'Iraq', 'Ireland', 'Israel', 'Italy', 'Ivory Coast', 'Jamaica', 'Japan', 'Jordan', 'Kazakhstan', 'Kenya', 'Kiribati', 'Korea, Democratic Peoples Republic of', 'Korea, Republic of', 'Kosovo', 'Kuwait', 'Kyrgyzstan', 'Lao Peoples Democratic Republic', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libyan Arab Jamahiriya', 'Liechtenstein', 'Lithuania', 'Luxembourg', 'Macau', 'Macedonia', 'Madagascar', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta', 'Marshall Islands', 'Martinique', 'Mauritania', 'Mauritius', 'Mayotte', 'Mexico', 'Micronesia, Federated States of', 'Moldova, Republic of', 'Monaco', 'Mongolia', 'Montserrat', 'Morocco', 'Mozambique', 'Myanmar', 'Namibia', 'Nauru', 'Nepal', 'Netherlands', 'Netherlands Antilles', 'New Caledonia', 'New Zealand', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfork Island', 'Northern Mariana Islands', 'Norway', 'Oman', 'Pakistan', 'Palau', 'Panama', 'Papua New Guinea', 'Paraguay', 'Peru', 'Philippines', 'Pitcairn', 'Poland', 'Portugal', 'Puerto Rico', 'Qatar', 'Reunion', 'Romania', 'Russian Federation', 'Rwanda', 'Saint Kitts and Nevis', 'Saint Lucia', 'Saint Vincent and the Grenadines', 'Samoa', 'San Marino', 'Sao Tome and Principe', 'Saudi Arabia', 'Senegal', 'Seychelles', 'Sierra Leone', 'Singapore', 'Slovakia', 'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa', 'South Georgia South Sandwich Islands', 'South Sudan', 'Spain', 'Sri Lanka', 'St. Helena', 'St. Pierre and Miquelon', 'Sudan', 'Suriname', 'Svalbarn and Jan Mayen Islands', 'Swaziland', 'Sweden', 'Switzerland', 'Syrian Arab Republic', 'Taiwan', 'Tajikistan', 'Tanzania, United Republic of', 'Thailand', 'Togo', 'Tokelau', 'Tonga', 'Trinidad and Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 'Turks and Caicos Islands', 'Tuvalu', 'Uganda', 'Ukraine', 'United Arab Emirates', 'United Kingdom', 'United States minor outlying islands', 'Uruguay', 'Uzbekistan', 'Vanuatu', 'Vatican City State', 'Venezuela', 'Vietnam', 'Virigan Islands (British)', 'Virgin Islands (U.S.)', 'Wallis and Futuna Islands', 'Western Sahara', 'Yemen', 'Yugoslavia', 'Zaire', 'Zambia', 'Zimbabwe');

CREATE TYPE productType AS ENUM ('Disc','Vinyl','Accessories','Instrument');

CREATE TYPE genre AS ENUM ('Pop/Rock','Electronic','Jazz','Classic','Hip-Hop','Rap','Blues','Soul','Indie','R&B','Reggae','Folk/Country','Other');

/* TABLES */

CREATE TABLE "user"(
  id SERIAL PRIMARY KEY,
  username TEXT NOT NULL UNIQUE,
  email TEXT NOT NULL UNIQUE,
  password TEXT NOT NULL,
  name TEXT NOT NULL,
  is_admin BOOLEAN
);

CREATE TABLE client (
  user_id INTEGER REFERENCES "user" (id) ON UPDATE CASCADE ON DELETE CASCADE,
  clientCountry country,
  address TEXT,
  PRIMARY KEY(user_id)
);

CREATE TABLE tag(
  name TEXT PRIMARY KEY
);

CREATE TABLE preferences(
  tag_id TEXT REFERENCES tag (name),
  client_id INTEGER REFERENCES client(user_id) ON UPDATE CASCADE ON DELETE CASCADE,
  PRIMARY KEY(tag_id, client_id)
);

CREATE TABLE product(
  id SERIAL PRIMARY KEY,
  name TEXT NOT NULL,
  type TEXT,
  description TEXT,
  picture TEXT DEFAULT 'vinyl_PNG104.png',
  average INTEGER
);

CREATE TABLE categories(
   id SERIAL PRIMARY KEY,
   type TEXT NOT NULL,
   artist TEXT,
   brand TEXT
);

CREATE TABLE productTag(
  tag_id TEXT REFERENCES tag (name),
  product_id INTEGER REFERENCES product(id) ON UPDATE CASCADE,
  PRIMARY KEY(tag_id, product_id)
);

-- CREATE TABLE "order" (
--   id SERIAL PRIMARY KEY,
--   order_id INTEGER NOT NULL CHECK (order_id > 0),
--   ordered TIMESTAMP WITH TIME zone DEFAULT now() NOT NULL,
--   shipped TIMESTAMP WITH TIME zone,
--   est_delivery_time TIMESTAMP,
--   CONSTRAINT shipped CHECK ((shipped > ordered)),
--   client_id INTEGER NOT NULL REFERENCES client(user_id) ON UPDATE CASCADE
-- );

CREATE TABLE "order" (
  id SERIAL PRIMARY KEY,
  num INTEGER NOT NULL CHECK (num > 0),
  ordered TIMESTAMP WITH TIME zone DEFAULT now() NOT NULL,
  shipped TIMESTAMP WITH TIME zone,
  est_delivery_time TIMESTAMP,
  CONSTRAINT shipped CHECK ((shipped > ordered)),
  client_id INTEGER NOT NULL REFERENCES client(user_id) ON UPDATE CASCADE ON DELETE CASCADE
);


CREATE TABLE review (
  id SERIAL PRIMARY KEY,
  comment TEXT NOT NULL,
  review_date TIMESTAMP WITH TIME zone DEFAULT now() NOT NULL,
  rating INTEGER,
  CONSTRAINT ratingMin CHECK (rating<5),
  CONSTRAINT ratingMax CHECK (rating>0),
  client_id INTEGER NOT NULL REFERENCES client(user_id) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE product_review(
  product_id INTEGER REFERENCES product (id) ON UPDATE CASCADE,
  review_id INTEGER REFERENCES review (id) ON UPDATE CASCADE ON DELETE CASCADE,
  PRIMARY KEY(product_id, review_id)
);

CREATE TABLE return(
  id SERIAL PRIMARY KEY,
  reason TEXT NOT NULL,
  return_date TIMESTAMP WITH TIME zone DEFAULT now() NOT NULL,
  product_id INTEGER REFERENCES product(id) ON UPDATE CASCADE,
  order_id INTEGER REFERENCES "order"(id) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE shoppingBasket(
  product_id INTEGER REFERENCES product (id) ON UPDATE CASCADE,
  client_id INTEGER REFERENCES client (user_id) ON UPDATE CASCADE ON DELETE CASCADE,
  PRIMARY KEY(product_id, client_id)
);
-- //changes order referenced id
CREATE TABLE shoppingItems(
  order_id INTEGER REFERENCES "order"(id) ON UPDATE CASCADE ON DELETE CASCADE,
  product_id INTEGER REFERENCES product(id) ON UPDATE CASCADE,
  price NUMERIC NOT NULL CHECK (price > 0),
  PRIMARY KEY(order_id, product_id)
);

CREATE TABLE inventory(
  client_id INTEGER REFERENCES client(user_id) ON UPDATE CASCADE ON DELETE CASCADE,
  product_id INTEGER REFERENCES product(id) ON UPDATE CASCADE,
  PRIMARY KEY(client_id, product_id)
);

CREATE TABLE wish_list(
  client_id INTEGER REFERENCES client(user_id) ON UPDATE CASCADE ON DELETE CASCADE,
  product_id INTEGER REFERENCES product(id) ON UPDATE CASCADE,
  PRIMARY KEY(client_id, product_id)
);

CREATE TABLE transfer(
  reference INTEGER PRIMARY KEY,
  limitDate TIMESTAMP WITH TIME zone DEFAULT now() NOT NULL
);

CREATE TABLE transferPayment(
  order_id INTEGER REFERENCES "order"(id) ON UPDATE CASCADE ON DELETE CASCADE,
  transfer_id INTEGER REFERENCES transfer(reference) ON UPDATE CASCADE,
  PRIMARY KEY(order_id, transfer_id)
);

CREATE TABLE shop(
  id SERIAL PRIMARY KEY,
  price FLOAT NOT NULL CHECK (price > 0),
  quantity INTEGER NOT NULL CHECK (quantity >= 0),
--   releaseDate TIMESTAMP WITH TIME zone DEFAULT now(),
  releaseDate INTEGER,
  product_id INTEGER NOT NULL REFERENCES product(id) ON UPDATE CASCADE
);

CREATE TABLE album(
  id SERIAL PRIMARY KEY,
  year INTEGER,
  band_artist TEXT NOT NULL,
  albumGenre genre NOT NULL,
  product_id INTEGER NOT NULL REFERENCES product(id) ON UPDATE CASCADE
);

CREATE TABLE other(
  id SERIAL PRIMARY KEY,
  brand TEXT NOT NULL,
  category TEXT NOT NULL,
  model TEXT NOT NULL,
  product_id INTEGER NOT NULL REFERENCES product(id) ON UPDATE CASCADE
);

/* TRIGGERS */

CREATE FUNCTION verify_stock() RETURNS TRIGGER AS
$BODY$
BEGIN
	IF
		EXISTS (SELECT * FROM product, shop WHERE product.id = shop.product_id AND product.id = New.product_id AND shop.quantity = 0)
	THEN
		RAISE EXCEPTION 'Not enough stock';
	END IF;
	RETURN NEW;
END
$BODY$
LANGUAGE plpgsql;

CREATE TRIGGER check_quantity_bought BEFORE INSERT
ON shoppingItems
FOR EACH ROW
EXECUTE PROCEDURE verify_stock();

CREATE FUNCTION update_availability() RETURNS TRIGGER AS
$BODY$
BEGIN
  UPDATE shop
  SET quantity = quantity - New.quantity
  WHERE product_id = New.product_id;
  RETURN NEW;
END
$BODY$
LANGUAGE plpgsql;

CREATE TRIGGER update_availability AFTER INSERT
ON shop
EXECUTE PROCEDURE update_availability();

CREATE FUNCTION update_product_rating() RETURNS TRIGGER AS
$BODY$
BEGIN
	UPDATE product
	SET average = (SELECT AVG(rating) FROM review WHERE id = New.review_id)
	WHERE id = New.product_id;
	RETURN NEW;
END
$BODY$
LANGUAGE plpgsql;
-- --
-- CREATE FUNCTION get_product_rating() RETURNS TRIGGER AS
-- $BODY$
-- BEGIN
-- UPDATE product
-- SET average = (SELECT AVG(rating) FROM review
--     WHERE review.id = product_review.review_id)
--     WHERE product_review.product_id = product.id;
-- RETURN NEW;
-- END
-- $BODY$
-- LANGUAGE plpgsql;
-- --
CREATE TRIGGER product_score AFTER INSERT OR UPDATE OR DELETE
ON product_review
EXECUTE PROCEDURE update_product_rating();

/* INDEXES */

CREATE INDEX email_user ON "user" USING hash(email);

CREATE INDEX album_details ON album USING hash(product_id);

/* CREATE INDEX search_index ON product USING GIST(to_tcvector('english', name || ' ' || description)); */

INSERT INTO "user" (id, username, email, password, name, is_admin) VALUES (1, 'joaocarlosmrp', 'joaocarlosmrp@gmail.com', '$2y$10$2ZCT/aVU7lL6UVn1d3vk1.Y5AC0DWLBWEo9fCwpzuRZwAU508QfT.', 'Joao Pires',  FALSE);
INSERT INTO "user" (id, username, email, password, name, is_admin) VALUES (2, 'tomasfgon', 'tomasfgon@hotmail.com', '$2y$10$2ZCT/aVU7lL6UVn1d3vk1.Y5AC0DWLBWEo9fCwpzuRZwAU508QfT.', 'Tomas Goncalves', FALSE);
INSERT INTO "user" (id, username, email, password, name, is_admin) VALUES (3, 'monikas', 'monikas@msn.com', '$2y$10$2ZCT/aVU7lL6UVn1d3vk1.Y5AC0DWLBWEo9fCwpzuRZwAU508QfT.', 'Monika', FALSE);
INSERT INTO "user" (id, username, email, password, name, is_admin) VALUES (4, 'margaridacosme', 'margaridacosme@sapo.pt', '$2y$10$2ZCT/aVU7lL6UVn1d3vk1.Y5AC0DWLBWEo9fCwpzuRZwAU508QfT.', 'Margarida Goncalves', FALSE);
INSERT INTO "user" (id, username, email, password, name, is_admin) VALUES (5, 'antonioabc', 'antonioabc@sapo.pt', '$2y$10$2ZCT/aVU7lL6UVn1d3vk1.Y5AC0DWLBWEo9fCwpzuRZwAU508QfT.', 'Antonio Abacate', FALSE);
INSERT INTO "user" (id, username, email, password, name, is_admin) VALUES (6, 'joaquimdef', 'joaquimdef@sapo.pt', '$2y$10$2ZCT/aVU7lL6UVn1d3vk1.Y5AC0DWLBWEo9fCwpzuRZwAU508QfT.', 'Joaquim Definicao', FALSE);
INSERT INTO "user" (id, username, email, password, name, is_admin) VALUES (7, 'anibalgramido', 'anibalgramido@yahoo.pt', '$2y$10$2ZCT/aVU7lL6UVn1d3vk1.Y5AC0DWLBWEo9fCwpzuRZwAU508QfT.', 'Anibal Gramido', FALSE);
INSERT INTO "user" (id, username, email, password, name, is_admin) VALUES (8, 'tatianaabreu', 'tatianaabreu@gmail.com', '$2y$10$2ZCT/aVU7lL6UVn1d3vk1.Y5AC0DWLBWEo9fCwpzuRZwAU508QfT.', 'Tatiana Abreu', FALSE);
INSERT INTO "user" (id, username, email, password, name, is_admin) VALUES (9, 'henriquecastro', 'henriquecastro@sapo.pt', '$2y$10$2ZCT/aVU7lL6UVn1d3vk1.Y5AC0DWLBWEo9fCwpzuRZwAU508QfT.', 'Henrique Castro', FALSE);
INSERT INTO "user" (id, username, email, password, name, is_admin) VALUES (10, 'penelopecruz', 'penelopecruz@outlook.pt', '$2y$10$2ZCT/aVU7lL6UVn1d3vk1.Y5AC0DWLBWEo9fCwpzuRZwAU508QfT.', 'Penelope Cruz', FALSE);
INSERT INTO "user" (id, username, email, password, name, is_admin) VALUES (11, 'tiagomonteiro', 'tiagomonteiro@sapo.pt', '$2y$10$2ZCT/aVU7lL6UVn1d3vk1.Y5AC0DWLBWEo9fCwpzuRZwAU508QfT.', 'Tiago Monteiro', FALSE);
INSERT INTO "user" (id, username, email, password, name, is_admin) VALUES (12, 'fernandoalbertino', 'fernandoalbertino@sapo.pt', '$2y$10$2ZCT/aVU7lL6UVn1d3vk1.Y5AC0DWLBWEo9fCwpzuRZwAU508QfT.', 'Fernando Albertino', FALSE);
INSERT INTO "user" (id, username, email, password, name, is_admin) VALUES (13, 'filipamoreira', 'filipamoreira@msn.com', '$2y$10$2ZCT/aVU7lL6UVn1d3vk1.Y5AC0DWLBWEo9fCwpzuRZwAU508QfT.', 'Filipa Moreira', FALSE);
INSERT INTO "user" (id, username, email, password, name, is_admin) VALUES (14, 'afonsoneves', 'afonsoneves@hotmail.com', '$2y$10$2ZCT/aVU7lL6UVn1d3vk1.Y5AC0DWLBWEo9fCwpzuRZwAU508QfT.', 'Afonso Neves', FALSE);
INSERT INTO "user" (id, username, email, password, name, is_admin) VALUES (15, 'lisandrotomas', 'lisandrotomas@sapo.pt', '$2y$10$2ZCT/aVU7lL6UVn1d3vk1.Y5AC0DWLBWEo9fCwpzuRZwAU508QfT.', 'Lisandro Tomas', FALSE);
INSERT INTO "user" (id, username, email, password, name, is_admin) VALUES (16, 'yurigorbachov', 'yurigorbachov@sapo.pt', '$2y$10$2ZCT/aVU7lL6UVn1d3vk1.Y5AC0DWLBWEo9fCwpzuRZwAU508QfT.', 'Yuri Gorbachov', FALSE);
INSERT INTO "user" (id, username, email, password, name, is_admin) VALUES (17, '1D4life', '1D4life@outlook.pt', '$2y$10$2ZCT/aVU7lL6UVn1d3vk1.Y5AC0DWLBWEo9fCwpzuRZwAU508QfT.', 'One Direction Fan Club', FALSE);
INSERT INTO "user" (id, username, email, password, name, is_admin) VALUES (18, 'techiiie', 'techiiie@sapo.pt', '$2y$10$2ZCT/aVU7lL6UVn1d3vk1.Y5AC0DWLBWEo9fCwpzuRZwAU508QfT.', 'Musk Elon', FALSE);
INSERT INTO "user" (id, username, email, password, name, is_admin) VALUES (19, 'client_discotech', 'client@discotech.com', '$2y$10$2ZCT/aVU7lL6UVn1d3vk1.Y5AC0DWLBWEo9fCwpzuRZwAU508QfT.', 'Client', FALSE);
INSERT INTO "user" (id, username, email, password, name, is_admin) VALUES (20, 'admin_discotech', 'admin@discotech.com', '$2y$10$2ZCT/aVU7lL6UVn1d3vk1.Y5AC0DWLBWEo9fCwpzuRZwAU508QfT.', 'Admin', TRUE);

INSERT INTO client (user_id, clientCountry, address) VALUES (2, 'Portugal', 'Rua No 1, 123');
INSERT INTO client (user_id, clientCountry, address) VALUES (4, 'Spain', 'Rua No 2, 123');
INSERT INTO client (user_id, clientCountry, address) VALUES (6, 'Russian Federation', 'Rua No 3, 123');
INSERT INTO client (user_id, clientCountry, address) VALUES (7, 'Poland', 'Rua No 4, 123');
INSERT INTO client (user_id, clientCountry, address) VALUES (8, 'France', 'Rua No 5, 123');
INSERT INTO client (user_id, clientCountry, address) VALUES (10, 'Italy', 'Rua No 6, 123' );
INSERT INTO client (user_id, clientCountry, address) VALUES (11, 'Germany', 'Rua No 7, 123');
INSERT INTO client (user_id, clientCountry, address) VALUES (12, 'Portugal', 'Rua No 8, 123');
INSERT INTO client (user_id, clientCountry, address) VALUES (13, 'Russian Federation', 'Rua No 9, 123');
INSERT INTO client (user_id, clientCountry, address) VALUES (15, 'Spain', 'Rua No 10, 123');

INSERT INTO tag (name) VALUES ('new rock');
INSERT INTO tag (name) VALUES ('limited edition product');
INSERT INTO tag (name) VALUES ('autographed vinyl');
INSERT INTO tag (name) VALUES ('exclusive hip-hop content');
INSERT INTO tag (name) VALUES ('parental content advisory');
INSERT INTO tag (name) VALUES ('kids first choice');
INSERT INTO tag (name) VALUES ('portugal hit');
INSERT INTO tag (name) VALUES ('not good anymore');
INSERT INTO tag (name) VALUES ('rare product');
INSERT INTO tag (name) VALUES ('slow vibes');
INSERT INTO tag (name) VALUES ('not recommended for personal use');
INSERT INTO tag (name) VALUES ('old but gold');
INSERT INTO tag (name) VALUES ('to dance');

INSERT INTO preferences (tag_id, client_id) VALUES ('to dance', 2);
INSERT INTO preferences (tag_id, client_id) VALUES ('new rock', 4);
INSERT INTO preferences (tag_id, client_id) VALUES ('slow vibes', 6);
INSERT INTO preferences (tag_id, client_id) VALUES ('portugal hit', 7);
INSERT INTO preferences (tag_id, client_id) VALUES ('rare product', 8);

INSERT INTO product (id, name, type, description, picture, average) VALUES (1, 'Songs of Innocence', 'Disc', 'Brand new album', 'songs_innocence.png', 1);
INSERT INTO product (id, name, type, description, picture, average) VALUES (2, 'Songs of Experience', 'Disc', 'Brand new album', 'songs_experience.png', 2);
INSERT INTO product (id, name, type, description, picture, average) VALUES (3, 'Pop', 'Disc', 'Brand new album', 'u2pop.png', 2);
INSERT INTO product (id, name, type, description, picture, average) VALUES (4, 'Singles', 'Vinyl', 'Brand new album', 'u2singles.png', 2);
INSERT INTO product (id, name, type, description, picture, average) VALUES (5, 'Divide', 'Disc', 'Brand new album', 'ed_divide.png', 3);
INSERT INTO product (id, name, type, description, picture, average) VALUES (6, 'Multiply', 'Vinyl', 'Brand new album', 'ed_mult.png', 3);
INSERT INTO product (id, name, type, description, picture, average) VALUES (7, 'Plus', 'Disc', 'Brand new album', 'ed_plus.png', 4);
INSERT INTO product (id, name, type, description, picture, average) VALUES (8, 'No6 Collab Project', 'Vinyl', 'Brand new album', 'ed_no6.png', 4);
INSERT INTO product (id, name, type, description, picture, average) VALUES (9, 'No6 Collab Project', 'Disc', 'Brand new album', 'ed_no6.png', 4);
INSERT INTO product (id, name, type, description, picture, average) VALUES (10, 'AB', 'Vinyl', 'Brand new album', 'kaleo_ab.png', 4);
INSERT INTO product (id, name, type, description, picture, average) VALUES (11, 'AB', 'Disc', 'Brand new album', 'kaleo_ab.png', 4);
INSERT INTO product (id, name, type, description, picture, average) VALUES (12, 'Live at Wembley', 'Vinyl', 'Brand new album', 'queen_wembley.png', 4);
INSERT INTO product (id, name, type, description, picture, average) VALUES (13, 'Best of', 'Disc', 'Brand new album', 'bowie_bestof.png', 4);
INSERT INTO product (id, name, type, description, picture, average) VALUES (14, 'Born in the USA', 'Vinyl', 'Brand new album', 'bruce_bornUSA.png', 5);
INSERT INTO product (id, name, type, description, picture, average) VALUES (15, 'Highway to hell', 'Disc', 'Brand new album', 'acdc_hell.png', 5);
INSERT INTO product (id, name, type, description, picture, average) VALUES (16, 'Microphone Support', 'Accessories', 'The best in the market', 'mic_sup.png', 5);
INSERT INTO product (id, name, type, description, picture, average) VALUES (17, 'Headphones', 'Accessories', 'The best in the market', 'head2021.png', 5);
INSERT INTO product (id, name, type, description, picture, average) VALUES (18, 'Guitar Support', 'Accessories', 'The best in the market', 'guitar_sup.png', 5);
INSERT INTO product (id, name, type, description, picture, average) VALUES (19, 'Yamaha Drums 2021', 'Instrument', 'Like no other', 'yamaha_drum.png', 5);
INSERT INTO product (id, name, type, description, picture, average) VALUES (20, 'Old Fashion Guitar', 'Instrument', 'Like no other', 'old_guitar.png', 5);

INSERT INTO productTag (tag_id, product_id) VALUES ('new rock', 3);
INSERT INTO productTag (tag_id, product_id) VALUES ('old but gold', 12);
INSERT INTO productTag (tag_id, product_id) VALUES ('limited edition product', 15);
INSERT INTO productTag (tag_id, product_id) VALUES ('rare product', 19);
INSERT INTO productTag (tag_id, product_id) VALUES ('rare product', 20);

-- INSERT INTO "order" (id, order_id, ordered, client_id) VALUES (1, 138582, '2021-02-20 11:45:00', 4);
-- INSERT INTO "order" (id, order_id, ordered, client_id) VALUES (2, 134582, '2021-03-21 12:45:00', 10);
-- INSERT INTO "order" (id, order_id, ordered, client_id) VALUES (3, 128582, '2021-04-10 13:35:10', 12);
-- INSERT INTO "order" (id, order_id, ordered, client_id) VALUES (4, 156782, '2021-05-01 01:45:50', 13);
-- INSERT INTO "order" (id, order_id, ordered, client_id) VALUES (5, 948582, '2021-06-05 12:20:32', 15);
INSERT INTO "order" (id, num, ordered, client_id) VALUES (1, 138582, '2021-02-20 11:45:00', 4);
INSERT INTO "order" (id, num, ordered, client_id) VALUES (2, 134582, '2021-03-21 12:45:00', 10);
INSERT INTO "order" (id, num, ordered, client_id) VALUES (3, 128582, '2021-04-10 13:35:10', 12);
INSERT INTO "order" (id, num, ordered, client_id) VALUES (4, 156782, '2021-05-01 01:45:50', 13);
INSERT INTO "order" (id, num, ordered, client_id) VALUES (5, 948582, '2021-05-01 12:20:32', 15);



INSERT INTO review (id, comment, review_date, rating, client_id) VALUES (1, 'Good enough', '2021-03-25 12:45:00', 4, 10);
INSERT INTO review (id, comment, review_date, rating, client_id) VALUES (2, 'Trash is better', '2021-05-15 12:45:00', 2, 13);
INSERT INTO review (id, comment, review_date, rating, client_id) VALUES (3, 'The worst product ever', '2021-06-25 12:45:00', 1, 15);

INSERT INTO product_review (product_id, review_id) VALUES (2, 1);
INSERT INTO product_review (product_id, review_id) VALUES (17, 2);
INSERT INTO product_review (product_id, review_id) VALUES (20, 3);

INSERT INTO return (id, reason, return_date, product_id, order_id) VALUES (1, 'Broken product', '2021-06-01 12:20:32', 7, 4);
INSERT INTO return (id, reason, return_date, product_id, order_id) VALUES (2, 'Invalid product', '2021-06-10 12:20:32', 8, 5);

INSERT INTO shoppingBasket (product_id, client_id) VALUES (1, 10);
INSERT INTO shoppingBasket (product_id, client_id) VALUES (2, 11);
INSERT INTO shoppingBasket (product_id, client_id) VALUES (3, 12);
INSERT INTO shoppingBasket (product_id, client_id) VALUES (4, 13);
INSERT INTO shoppingBasket (product_id, client_id) VALUES (5, 15);

INSERT INTO shoppingItems (order_id, product_id, price) VALUES (1, 1, 15);
INSERT INTO shoppingItems (order_id, product_id, price) VALUES (2, 17, 30);
INSERT INTO shoppingItems (order_id, product_id, price) VALUES (3, 20, 12);
INSERT INTO shoppingItems (order_id, product_id, price) VALUES (4, 7, 13);
INSERT INTO shoppingItems (order_id, product_id, price) VALUES (5, 8, 7);

INSERT INTO inventory (client_id, product_id) VALUES (4, 12);
INSERT INTO inventory (client_id, product_id) VALUES (10, 15);
INSERT INTO inventory (client_id, product_id) VALUES (12, 3);
INSERT INTO inventory (client_id, product_id) VALUES (12, 4);
INSERT INTO inventory (client_id, product_id) VALUES (12, 5);

INSERT INTO wish_list (client_id, product_id) VALUES (4, 2);
INSERT INTO wish_list (client_id, product_id) VALUES (10, 5);
INSERT INTO wish_list (client_id, product_id) VALUES (12, 13);
INSERT INTO wish_list (client_id, product_id) VALUES (12, 14);
INSERT INTO wish_list (client_id, product_id) VALUES (12, 15);

INSERT INTO transfer (reference, limitDate) VALUES (1234567, '2021-05-03 01:45:50');
INSERT INTO transfer (reference, limitDate) VALUES (1234568, '2021-06-07 01:45:50');

INSERT INTO transferPayment (order_id, transfer_id) VALUES (4, 1234567);
INSERT INTO transferPayment (order_id, transfer_id) VALUES (5, 1234568);

INSERT INTO shop (id, price, quantity, releaseDate, product_id) VALUES (1, 20, 0, '2000', 1);
INSERT INTO shop (id, price, quantity, releaseDate, product_id) VALUES (2, 25, 12, '2000', 2);
INSERT INTO shop (id, price, quantity, releaseDate, product_id) VALUES (3, 30, 0, '2000', 3);
INSERT INTO shop (id, price, quantity, releaseDate, product_id) VALUES (4, 15, 5, '2000', 4);
INSERT INTO shop (id, price, quantity, releaseDate, product_id) VALUES (5, 10, 3, '2010', 5);
INSERT INTO shop (id, price, quantity, releaseDate, product_id) VALUES (6, 5, 100, '2010', 6);
INSERT INTO shop (id, price, quantity, releaseDate, product_id) VALUES (7, 45, 20, '2010', 7);
INSERT INTO shop (id, price, quantity, releaseDate, product_id) VALUES (8, 60, 150, '2020', 8);
INSERT INTO shop (id, price, quantity, releaseDate, product_id) VALUES (9, 6, 0, '2020', 9);
INSERT INTO shop (id, price, quantity, releaseDate, product_id) VALUES (10, 2, 15, '2020', 10);
INSERT INTO shop (id, price, quantity, releaseDate, product_id) VALUES (11, 70, 22, '2020', 11);
INSERT INTO shop (id, price, quantity, releaseDate, product_id) VALUES (12, 12, 43, '2020', 12);
INSERT INTO shop (id, price, quantity, releaseDate, product_id) VALUES (13, 13, 10, '2020', 13);
INSERT INTO shop (id, price, quantity, releaseDate, product_id) VALUES (14, 14, 5, '2008', 14);
INSERT INTO shop (id, price, quantity, releaseDate, product_id) VALUES (15, 64, 7, '2008', 15);
INSERT INTO shop (id, price, quantity, releaseDate, product_id) VALUES (16, 15, 9, '1998', 16);
INSERT INTO shop (id, price, quantity, releaseDate, product_id) VALUES (17, 15, 14, '1998', 17);
INSERT INTO shop (id, price, quantity, releaseDate, product_id) VALUES (18, 20, 10, '1998', 18);
INSERT INTO shop (id, price, quantity, releaseDate, product_id) VALUES (19, 22, 90, '1998', 19);
INSERT INTO shop (id, price, quantity, releaseDate, product_id) VALUES (20, 20, 10, '1995', 20);

INSERT INTO album (id, year, band_artist, albumGenre, product_id) VALUES (1, 1980, 'U2', 'Pop/Rock', 1);
INSERT INTO album (id, year, band_artist, albumGenre, product_id) VALUES (2, 1985, 'U2', 'Pop/Rock', 2);
INSERT INTO album (id, year, band_artist, albumGenre, product_id) VALUES (3, 1999, 'U2', 'Pop/Rock', 3);
INSERT INTO album (id, year, band_artist, albumGenre, product_id) VALUES (4, 2006, 'U2', 'Pop/Rock', 4);
INSERT INTO album (id, year, band_artist, albumGenre, product_id) VALUES (5, 2012, 'Ed Sheeran', 'Pop/Rock', 5);
INSERT INTO album (id, year, band_artist, albumGenre, product_id) VALUES (6, 2015, 'Ed Sheeran', 'Pop/Rock', 6);
INSERT INTO album (id, year, band_artist, albumGenre, product_id) VALUES (7, 2020, 'Ed Sheeran', 'Pop/Rock', 7);
INSERT INTO album (id, year, band_artist, albumGenre, product_id) VALUES (8, 2019, 'Ed Sheeran', 'Pop/Rock', 8);
INSERT INTO album (id, year, band_artist, albumGenre, product_id) VALUES (9, 2019, 'Ed Sheeran', 'Pop/Rock', 9);
INSERT INTO album (id, year, band_artist, albumGenre, product_id) VALUES (10, 2010, 'Kaleo', 'Blues', 10);
INSERT INTO album (id, year, band_artist, albumGenre, product_id) VALUES (11, 2010, 'Kaleo', 'Blues', 11);
INSERT INTO album (id, year, band_artist, albumGenre, product_id) VALUES (12, 1995, 'Queen', 'Pop/Rock', 12);
INSERT INTO album (id, year, band_artist, albumGenre, product_id) VALUES (13, 2005, 'David Bowie', 'Classic', 13);
INSERT INTO album (id, year, band_artist, albumGenre, product_id) VALUES (14, 2001, 'Bruce Springsteen', 'Classic', 14);
INSERT INTO album (id, year, band_artist, albumGenre, product_id) VALUES (15, 1998, 'ACDC', 'Electronic', 15);

INSERT INTO other (id, brand, category, model, product_id) VALUES (1, 'Trust', 'Supports', '2019-X23', 16);
INSERT INTO other (id, brand, category, model, product_id) VALUES (2, 'Apple', 'Phones', '2020-X23', 17);
INSERT INTO other (id, brand, category, model, product_id) VALUES (3, 'Trust', 'Supports', '2019-Y14', 18);
INSERT INTO other (id, brand, category, model, product_id) VALUES (4, 'Yamaha', 'Drums', '2021-58X', 19);
INSERT INTO other (id, brand, category, model, product_id) VALUES (5, 'Yamaha', 'Guitars', '2006-148', 20);

INSERT INTO categories (id, type, artist, brand) VALUES (1, 'Disc', 'Michael Jackson', 'Fender');
INSERT INTO categories (id, type, artist, brand) VALUES (2, 'Vinyl', 'Drake', 'Roland');
INSERT INTO categories (id, type, artist, brand) VALUES (3, 'Accessories', 'Fedez', 'Yamaha');
INSERT INTO categories (id, type, artist, brand) VALUES (4, 'Innstrument', 'Franco126', 'Gibson');

SELECT setval(pg_get_serial_sequence('order', 'id'), (SELECT CAST (MAX(id) as INTEGER) FROM "order"));
SELECT setval(pg_get_serial_sequence('user', 'id'), (SELECT CAST (MAX(id) as INTEGER) FROM "user"));
SELECT setval(pg_get_serial_sequence('product', 'id'), (SELECT CAST (MAX(id) as INTEGER) FROM product));
SELECT setval(pg_get_serial_sequence('shop', 'id'), (SELECT CAST (MAX(id) as INTEGER) FROM shop));
SELECT setval(pg_get_serial_sequence('album', 'id'), (SELECT CAST (MAX(id) as INTEGER) FROM album));
SELECT setval(pg_get_serial_sequence('other', 'id'), (SELECT CAST (MAX(id) as INTEGER) FROM other));
