CREATE TABLE IF NOT EXISTS b_redsign_favorite
(
	ID int(11) NOT NULL AUTO_INCREMENT,
	FUSER_ID int(18) NOT NULL,
	ELEMENT_ID int(18) NOT NULL,
	PRODUCT_ID int(18) NOT NULL DEFAULT 0,
	PRIMARY KEY (ID)
);
