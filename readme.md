@aecsant this is a Small CRUD Api, created all by myself

<h1>Feature Flag API </h1>

<h2>Installation:</h2>
<strong>Follow the next steps:</strong>
1. docker-compose up -d --build
2. composer install
3. php artisan migrate:refresh

<h2>Services</h2>

<h3>1.- Create feature</h3>
<strong>EndPoint:</strong> http://flagapi.test/api/feature <br>
<strong>Type:</strong> POST <br>
<strong>Headers:</strong> <br>
-Accept: "application/json" <br>
-Content-Type: "application/x-www-form-urlencoded" <br>
<strong>Body:</strong><br>
-name: "string, required, unique, maxLength = 45 characters" <br>
-description: "string, maxLength = 255 characters, nullable (default empty)" <br>
-status: "boolean, 1 (for active), 0 (for inactive), nullable (default 0)" <br>
<strong>Response:</strong> Json<br>
<strong>Response Example:</strong> (Success)<br>
{
    "status": "1",
    "name": "MoneyMatrix",
    "description": "A payment way",
    "updated_at": "2019-01-18 03:03:03",
    "created_at": "2019-01-18 03:03:03",
    "id": 1
}
<br><strong>Response Example:</strong> (Fail)<br>
{
    "message": "The given data was invalid.",
    "errors": {
        "name": [
            "The name cannot be empty"
        ]
    }
}
<h3>2.- Update feature</h3>
<strong>EndPoint:</strong> http://flagapi.test/api/feature/{id} <br>
<strong>Type:</strong> PUT <br>
<strong>Headers:</strong> <br>
-Accept: "application/json" <br>
-Content-Type: "application/x-www-form-urlencoded" <br>
<strong>Body:</strong> (All optionals)<br>
-name: "string, unique, maxLength = 45 characters" <br>
-description: "string, maxLength = 255 characters" <br>
-status: "boolean, 1 (for active), 0 (for inactive)" <br>
<strong>Response:</strong> Json<br>
<strong>Response Example:</strong> (Success)<br>
{
    "status": true
}
<br><strong>Response Example:</strong> (Fail)<br>
{
    "message": "The given data was invalid.",
    "errors": {
        "name": [
            "The name cannot be empty"
        ]
    }
}
<h3>3.- Delete feature</h3>
<strong>EndPoint:</strong> http://flagapi.test/api/feature/{id} <br>
<strong>Type:</strong> DELETE <br>
<strong>Headers:</strong> <br>
-Accept: "application/json" <br>
-Content-Type: "application/x-www-form-urlencoded" <br>
<strong>Response:</strong> Json<br>
<strong>Response Example:</strong> (Success)<br>
{
    "status": 1
}
<br><strong>Response Example:</strong> (Fail)<br>
{
    "status": 0
}
<h3>4.- Show feature</h3>
<strong>EndPoint:</strong> http://flagapi.test/api/feature/{id} <br>
<strong>Type:</strong> GET <br>
<strong>Headers:</strong> <br>
-Accept: "application/json" <br>
-Content-Type: "application/x-www-form-urlencoded" <br>
<strong>Response:</strong> Json<br>
<strong>Response Example:</strong> (Success)<br>
{
    "id": 2,
    "status": 0,
    "name": "MoneyMatrix",
    "description": "A Payment Way",
    "created_at": "2019-01-18 01:04:35",
    "updated_at": "2019-01-18 01:04:35"
}
<br><strong>Response Example:</strong> (Not Found)<br>
{}
<h3>4.- List features</h3>
<strong>EndPoint:</strong> http://flagapi.test/api/feature <br>
<strong>Type:</strong> GET <br>
<strong>Headers:</strong> <br>
-Accept: "application/json" <br>
-Content-Type: "application/x-www-form-urlencoded" <br>
<strong>Response:</strong> Json<br>
<strong>Response Example:</strong> (Success)<br>
[
    {
        "id": 2,
        "status": 0,
        "name": "MoneyMatrix",
        "description": "A Payment Way",
        "created_at": "2019-01-18 01:04:35",
        "updated_at": "2019-01-18 01:04:35"
    }
]
<br><strong>Response Example:</strong> (Empty list)<br>
[]
