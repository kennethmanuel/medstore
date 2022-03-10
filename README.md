# This branch is for testing week 5 assessment

a lot of things might not work

## 1 table query
1. Show all drug category data
```sql
SELECT * FROM `categories`;
```

```php
public function index()
{
    $categoryCollection = Category::all();
    dd($categoryCollection);
}
```

2. Show all medecines names, formulas and prices
```sql
SELECT generic_name, form, price FROM `medicines` 
```

```php
public function name_formula_price()
{
    $medicineCollection = Medicine::select([
        'generic_name',
        'form',
        'price'
    ])->get();
    dd($medicineCollection);
}
```

## Query inner join 2 tables
1. Show all medicines names, formulas and category names
```sql
SELECT generic_name, form, categories.name
FROM medicines
INNER JOIN categories ON medicines.category_id = categories.id
```

```php
public function name_formula_price_catname()
{
    $medicineCollection = Medicine::select([
        'generic_name',
        'form',
        'price'
    ])->addSelect([
        'category_name' => Category::select('name')->whereColumn('category_id', 'id'),
    ])->get();
    dd($medicineCollection);
}
```

## Aggregation of sum, count with 2 tables
1. Display number of categories that have data on medicines
```sql
SELECT COUNT(DISTINCT(categories.name)) FROM `categories` 
LEFT JOIN medicines ON categories.id = medicines.category_id
WHERE medicines.id IS NOT NULL;
```

```php
public function count_have_medicine()
{
    $countHaveMedicine =
        DB::table('categories')
        ->distinct()
        ->select('categories.id')
        ->leftJoin('medicines', 'categories.id', '=', 'medicines.category_id')
        ->whereNotNull('medicines.id')
        ->count('categories.id');
    dd($countHaveMedicine);
}
```

2. Show the name of the categories that doesn't have any medicines data
```sql
SELECT DISTINCT(categories.name) FROM `categories` 
LEFT JOIN medicines ON categories.id = medicines.category_id
WHERE medicines.id IS NULL;
```

```php
public function show_haveno_medicine()
{
    $categoryCollection =
        DB::table('categories')
        ->distinct()
        ->select('categories.name')
        ->leftJoin('medicines', 'categories.id', '=', 'medicines.category_id')
        ->whereNull('medicines.id')
        ->get();
    dd($categoryCollection);
}
```

3. Show average price of each drug category, if no medicine, give 0
```sql
SELECT categories.name, IFNULL(AVG(price),0) FROM `categories` 
LEFT JOIN medicines ON categories.id = medicines.category_id
GROUP BY categories.id;
```

```php
public function avg_price()
{
    $categoryCollection = DB::table('categories')
        ->select('categories.name', DB::raw('IFNULL(AVG(price),0)'))
        ->leftJoin('medicines', 'categories.id', '=', 'medicines.category_id')
        ->groupBy('categories.id')
        ->get();
    // ->avg('price');
    dd($categoryCollection);
}
```

4. Show drug categories that have only 1 medicine product
```sql
SELECT categories.name, COUNT(categories.id) as total FROM medicines
LEFT JOIN categories ON categories.id = medicines.category_id
GROUP BY categories.id
HAVING total=1
```

```php
public function have_one_medicine_only()
{
    $medicineCollection = DB::table('medicines')
        ->select('categories.name', DB::raw('COUNT(categories.id) as total'))
        ->leftJoin('categories', 'categories.id', '=', 'medicines.category_id')
        ->groupBy('categories.id')
        ->havingRaw('total = ?', [1])
        ->get();
    dd($medicineCollection);
}
```

5. Show drugs that have one form
```sql
SELECT generic_name, COUNT(id) as total_form FROM medicines
GROUP BY generic_name
HAVING total_form = 1
```

```php
public function have_one_form_only()
{
    $medicine = DB::table('medicines')
        ->select('generic_name', DB::raw('COUNT(id) as total_form'))
        ->groupBy('generic_name')
        ->havingRaw('total_form = ?', [1])
        ->get();
    dd($medicine);
}
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

```php
public function highest_price()
{
    $highestMedicinePrice = DB::table('medicines')
        ->select('categories.name as category_name', 'medicines.generic_name', 'medicines.price')
        ->join('categories', 'categories.id', '=', 'medicines.category_id')
        ->whereRaw('medicines.price = ( SELECT MAX(medicines.price) FROM medicines )')
        ->get();
    dd($highestMedicinePrice);
}
```
