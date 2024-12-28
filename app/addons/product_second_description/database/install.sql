-- Adding a new column 'second_description' to the 'products' table
ALTER TABLE ?:products
    ADD COLUMN second_description TEXT NULL;

ALTER TABLE ?:product_descriptions
    ADD COLUMN second_description TEXT NULL;

