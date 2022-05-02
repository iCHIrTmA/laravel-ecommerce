Categories table

| id | title       | slug        | parent_id | created_at          | updated_at          |
|----|-------------|-------------|-----------|---------------------|---------------------|
|  1 | Brands      | brands      |           | 2022-03-16 23:57:16 | 2022-03-16 23:57:16 |
|  2 | Seasons     | seasons     |           | 2022-03-16 23:57:31 | 2022-03-16 23:57:31 |
|  3 | Nike        | nike        |         1 | 2022-03-17 00:13:52 | 2022-03-17 00:13:52 |
|  4 | Winter      | winter      |         2 | 2022-03-17 00:13:52 | 2022-03-17 00:13:52 |
|  5 | Spring      | spring      |         2 | 2022-03-17 00:13:52 | 2022-03-17 00:13:52 |
|  6 | New Arrival | new-arrival |         3 | 2022-03-17 00:13:52 | 2022-03-17 00:13:52 |


Products table

| id | title            | slug             | description                   | price | live_at             | created_at          | updated_at          |
|----|------------------|------------------|-------------------------------|-------|---------------------|---------------------|---------------------|
|  1 | Nike Air Force 1 | nike-air-force-1 | this is a product description |  9000 | 2022-03-17 12:12:20 | 2022-03-17 12:12:20 | 2022-03-17 12:12:20 |
|  2 | Example Product  | example-product  | example-product               |  6600 | 2022-03-27 00:39:00 | 2022-03-19 04:32:51 | 2022-03-19 04:32:51 |


Variations table

| id | product_id | title   | price | type  | sku | parent_id | order | created_at          | updated_at          |
|----|------------|---------|-------|-------|-----|-----------|-------|---------------------|---------------------|
| 10 |          1 | 14      | 15500 | size  | qrs |         9 |     1 | 2022-03-26 01:54:38 | 2022-03-26 01:54:38 |
|  9 |          1 | Rainbow | 15000 | color |     |           |     3 | 2022-03-26 01:53:45 | 2022-03-26 01:53:45 |
|  8 |          2 | 14      | 15500 | size  | mno |         7 |     1 | 2022-03-24 04:57:40 | 2022-03-24 04:57:40 |
|  7 |          2 | Rainbow | 15000 | color |     |           |     1 | 2022-03-24 04:57:40 | 2022-03-24 04:57:40 |
|  6 |          1 | 10      | 11000 | size  | jkl |         2 |     2 | 2022-03-17 23:32:24 | 2022-03-17 23:32:24 |
|  5 |          1 | 8       |  9500 | size  | ghi |         2 |     1 | 2022-03-17 23:32:24 | 2022-03-17 23:32:24 |
|  4 |          1 | 9       |  9000 | size  | def |         1 |     2 | 2022-03-17 23:32:24 | 2022-03-17 23:32:24 |
|  3 |          1 | 8       |  9000 | size  | abc |         1 |     1 | 2022-03-17 23:32:24 | 2022-03-17 23:32:24 |
|  2 |          1 | White   |  9500 | color |     |           |     2 | 2022-03-17 23:32:24 | 2022-03-17 23:32:24 |
|  1 |          1 | Black   |  9000 | color |     |           |     1 | 2022-03-17 23:32:24 | 2022-03-17 23:32:24 |

