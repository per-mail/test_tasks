-- А) какую сумму в среднем в месяц тратят пользователи в возрастном диапазоне от 18 до 25 лет
SELECT 
    EXTRACT(YEAR_MONTH FROM p.date) AS year_month,
    AVG(i.price) AS avg_monthly_spending
FROM 
    Purchases p
JOIN 
    Users u ON p.userId = u.userId
JOIN 
    Items i ON p.itemId = i.itemId
WHERE 
    u.age BETWEEN 18 AND 25
GROUP BY 
    year_month;


-- Б) в каком месяце года выручка от пользователей в возрастном диапазоне 35+ самая большая
SELECT 
    EXTRACT(MONTH FROM p.date) AS month,
    SUM(i.price) AS revenue
FROM 
    Purchases p
JOIN 
    Users u ON p.userId = u.userId
JOIN 
    Items i ON p.itemId = i.itemId
WHERE 
    u.age >= 35
GROUP BY 
    month
ORDER BY 
    revenue DESC
LIMIT 1;
