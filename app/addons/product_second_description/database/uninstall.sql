-- Dropping the 'second_description' column from the 'products' table
ALTER TABLE ?:products
DROP COLUMN second_description;


ALTER TABLE ?:product_descriptions
DROP COLUMN second_description;
