# This branch is for testing week 5 assessment

a lot of things might not work

## 1 table query
1. Show all drug category data
```sql
SELECT * FROM `categories`;
```
2. Show all medecines names, formulas and prices
```sql
SELECT generic_name, form, price FROM `medicines` 
```

## Query inner join 2 tables
1. Show all medicines names, formulas and category names
```sql
SELECT generic_name, form, categories.name
FROM medicines
INNER JOIN categories ON medicines.category_id = categories.id
```

## Aggregation of sum, count with 2 tables
1. Display number of categories that have data on medicines
```sql
SELECT COUNT(DISTINCT(categories.name)) FROM `categories` 
LEFT JOIN medicines ON categories.id = medicines.category_id
WHERE medicines.id IS NOT NULL;
```

2. Show the name of the categories that doesn't have any medicines data
```sql
SELECT DISTINCT(categories.name) FROM `categories` 
LEFT JOIN medicines ON categories.id = medicines.category_id
WHERE medicines.id IS NULL;
```

3. Show average price of each drug category, if no medicine, give 0
```sql
SELECT categories.name, IFNULL(AVG(price),0) FROM `categories` 
LEFT JOIN medicines ON categories.id = medicines.category_id
GROUP BY categories.id;
```

4. Show drug categories that have only 1 medicine product
```sql
SELECT categories.name, COUNT(categories.id) as total FROM medicines
LEFT JOIN categories ON categories.id = medicines.category_id
GROUP BY categories.id
HAVING total=1
```

5. Show drugs that have one form
```sql
SELECT generic_name, COUNT(id) as total_form FROM medicines
GROUP BY generic_name
HAVING total_form = 1
```

6. Display category and name of drug that has highest price
```sql
SELECT categories.name as category_name, medicines.generic_name,  medicines.price 
FROM medicines
INNER JOIN categories ON categories.id = medicines.category_id
WHERE medicines.price = (
    SELECT MAX(medicines.price)
    FROM medicines
)
```
