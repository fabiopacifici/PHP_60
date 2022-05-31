# Library

## Modello: Book

## Table: Books

- id:                 bigint PK(NOTNULL, AI, UNIQUE)
- isbn:               CHAR(16) NULL UNIQUE INDEX
- ean:                VARCHAR(13) NULL UNIQUE
- index:              TEXT NULL
- cover_image:        VARCHAR(255) NULL
- title:              VARCHAR(200) NOTNULL
- description:        TEXT NULL
- price:              DECIMAL(5,2) NULL
- pages_number:       SMALLINT NULL
- ?category?:         VARCHAR(50) NULL
- ?authour?:          VARCHAR(255) NULL
- ?genere?:           VARCHAR(50) NULL
- release_year:       YEAR NULL
- new_release:        TINYINT NULL
- special_price:      DECIMAL(5,2) NULL
- discount:           FLOAT(3,1) NULL
- ?language?:         VARCHAR(5) NOTNULL DEFAULT('it-IT')
- ?publisher?:        VARCHAR(255) NULL
- rarity:             TINYINT NOTNULL DEFAULT(0)
- best_seller_rank:   FLOAT(3,1) NULL
- best_seller:        TINYINT NULL
- ?country?:          VARCHAR(70) NOTNULL DEFAULT('italy')
- quantity:           TINYINT NOTNULL DEFAULT(0)
- create_at:          TIMESTAMP NOTNULL
- in_stock:           TINYINT NOTNULL DEFAULT(0)
- ?format?:           VARCHAR(20) NULL
- ?age_range?         VARCHAR(5) NULL
- note:               TEXT NULL
