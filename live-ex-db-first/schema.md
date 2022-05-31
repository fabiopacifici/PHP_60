# CarDealer DB schema

## Model: Car

## Table: cars

- id: PK, AI, NOTNULL, INDEX, UNIQUE
- brand: VARCHAR(20), NOTNULL, INDEX
- model: VARCHAR(25), NOTNULL, INDEX
- engine: VARCHAR(25), NULL
- description: TEXT, NULL
- image: VARCHAR(255) NULL
- ?category?: VARCHAR(20), NULL
- horsepower: FLOAT(6, 3), NULL
- doors: TINYINT, NULL
- price: DECIMAL(8, 2), NOTNULL
- in_stock: TINYINT, DEFAULT(0)
- previous_owners: TINYINT NULL
- km: FLOAT(8,2)
- conditions: VARCHAR(15)
- color: VARCHAR(25), NOTNULL
- transmission: VARCHAR(15), NULL
- seats: TINYINT, NULL
- notes: TEXT, NULL
