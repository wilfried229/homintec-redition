---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_7e3072a9c6d43c05123a799823b02c6d -->
## Display Swagger API page.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/docs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/docs"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET api/docs`


<!-- END_7e3072a9c6d43c05123a799823b02c6d -->

<!-- START_fd7a1e83248b4621afb675822d835f2b -->
## Dump api-docs content endpoint. Supports dumping a json, or yaml file.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/docs/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/docs/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "openapi": "3.0.0",
    "info": {
        "title": "Api covid19 Documentation",
        "description": "Implementation of Swagger with in Laravel",
        "contact": {
            "email": "admin@admin.com"
        },
        "license": {
            "name": "Apache 2.0",
            "url": "http:\/\/www.apache.org\/licenses\/LICENSE-2.0.html"
        },
        "version": "1.0.0"
    },
    "paths": {
        "\/api\/homintec\/penalite": {
            "get": {
                "tags": [
                    "Tests"
                ],
                "summary": "Get List Of penlaite",
                "description": "Returns all penlaite",
                "operationId": "index",
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application\/json": {}
                        }
                    },
                    "401": {
                        "description": "Unauthenticated"
                    },
                    "403": {
                        "description": "Forbidden"
                    },
                    "400": {
                        "description": "Bad Request"
                    },
                    "404": {
                        "description": "not found"
                    }
                }
            },
            "post": {
                "tags": [
                    "store"
                ],
                "summary": "save penalite",
                "description": "Login by email, password",
                "operationId": "store",
                "requestBody": {
                    "description": "pass penalite",
                    "required": true,
                    "content": {
                        "application\/json": {
                            "schema": {
                                "required": [
                                    "rouland",
                                    "type",
                                    "facteur",
                                    "penalite",
                                    "autorise",
                                    "excedant"
                                ],
                                "properties": {
                                    "rouland": {
                                        "type": "string",
                                        "format": "string",
                                        "example": "string"
                                    },
                                    "type": {
                                        "type": "string",
                                        "format": "string",
                                        "example": "string"
                                    },
                                    "facteur": {
                                        "type": "string",
                                        "example": "string"
                                    }
                                },
                                "type": "object"
                            }
                        }
                    }
                },
                "responses": {
                    "422": {
                        "description": "Wrong credentials response",
                        "content": {
                            "application\/json": {
                                "schema": {
                                    "properties": {
                                        "message": {
                                            "type": "string",
                                            "example": "Sorry, wrong email address or password. Please try again"
                                        }
                                    },
                                    "type": "object"
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
```

### HTTP Request
`GET docs/{jsonFile?}`


<!-- END_fd7a1e83248b4621afb675822d835f2b -->

<!-- START_1a23c1337818a4de9e417863aebaca33 -->
## docs/asset/{asset}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/docs/asset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/docs/asset/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "(1) - this L5 Swagger asset is not allowed"
}
```

### HTTP Request
`GET docs/asset/{asset}`


<!-- END_1a23c1337818a4de9e417863aebaca33 -->

<!-- START_a2c4ea37605c6d2e3c93b7269030af0a -->
## Display Oauth2 callback pages.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/oauth2-callback" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/oauth2-callback"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET api/oauth2-callback`


<!-- END_a2c4ea37605c6d2e3c93b7269030af0a -->

<!-- START_11af843ce622fe876a7e2a780ab58797 -->
## livewire/message/{name}
> Example request:

```bash
curl -X POST \
    "http://localhost/livewire/message/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/livewire/message/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST livewire/message/{name}`


<!-- END_11af843ce622fe876a7e2a780ab58797 -->

<!-- START_0c0d72339270a088ad33d6d2dfb0c525 -->
## livewire/upload-file
> Example request:

```bash
curl -X POST \
    "http://localhost/livewire/upload-file" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/livewire/upload-file"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST livewire/upload-file`


<!-- END_0c0d72339270a088ad33d6d2dfb0c525 -->

<!-- START_ccc6592d7fe84c3220047c56f21a3869 -->
## livewire/preview-file/{filename}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/livewire/preview-file/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/livewire/preview-file/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": ""
}
```

### HTTP Request
`GET livewire/preview-file/{filename}`


<!-- END_ccc6592d7fe84c3220047c56f21a3869 -->

<!-- START_b4eec1e6a6b013b2ad4c1eac731e26ef -->
## livewire/livewire.js
> Example request:

```bash
curl -X GET \
    -G "http://localhost/livewire/livewire.js" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/livewire/livewire.js"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET livewire/livewire.js`


<!-- END_b4eec1e6a6b013b2ad4c1eac731e26ef -->

<!-- START_3019b12652067fe81a20774174205153 -->
## livewire/livewire.js.map
> Example request:

```bash
curl -X GET \
    -G "http://localhost/livewire/livewire.js.map" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/livewire/livewire.js.map"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET livewire/livewire.js.map`


<!-- END_3019b12652067fe81a20774174205153 -->

<!-- START_b80787667d1f3d7233c8f0ca8dcf24d7 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/reddition" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/reddition"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/homintec/reddition`


<!-- END_b80787667d1f3d7233c8f0ca8dcf24d7 -->

<!-- START_8edeeeda4a363f1d33aa897dd2400ab2 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/reddition/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/reddition/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/homintec/reddition/create`


<!-- END_8edeeeda4a363f1d33aa897dd2400ab2 -->

<!-- START_cb3c89eef88f3ee831a2c9cfa5653fba -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/homintec/reddition" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/reddition"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/homintec/reddition`


<!-- END_cb3c89eef88f3ee831a2c9cfa5653fba -->

<!-- START_d74a7ab688ea2c6bfe019bd8138e04c8 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/reddition/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/reddition/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/homintec/reddition/{reddition}`


<!-- END_d74a7ab688ea2c6bfe019bd8138e04c8 -->

<!-- START_4414c4d8fffa57b004f6976c0803491e -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/reddition/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/reddition/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/homintec/reddition/{reddition}/edit`


<!-- END_4414c4d8fffa57b004f6976c0803491e -->

<!-- START_b32f95898705f84e8c14f6e59e5a6b36 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/homintec/reddition/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/reddition/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/homintec/reddition/{reddition}`

`PATCH api/homintec/reddition/{reddition}`


<!-- END_b32f95898705f84e8c14f6e59e5a6b36 -->

<!-- START_e8dd2d416b2c29f3f29a07dce1d39d3f -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/homintec/reddition/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/reddition/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/homintec/reddition/{reddition}`


<!-- END_e8dd2d416b2c29f3f29a07dce1d39d3f -->

<!-- START_97a339ebd5dc88446424780647e14ff3 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/surcharge" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/surcharge"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/homintec/surcharge`


<!-- END_97a339ebd5dc88446424780647e14ff3 -->

<!-- START_910805cfd2af97123b9a90e05b51ce04 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/surcharge/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/surcharge/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/homintec/surcharge/create`


<!-- END_910805cfd2af97123b9a90e05b51ce04 -->

<!-- START_722557d10a5f23222899a9d63ce12daf -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/homintec/surcharge" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/surcharge"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/homintec/surcharge`


<!-- END_722557d10a5f23222899a9d63ce12daf -->

<!-- START_957f2b24bf483e5a6f1b0eb3fba077e0 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/surcharge/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/surcharge/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/homintec/surcharge/{surcharge}`


<!-- END_957f2b24bf483e5a6f1b0eb3fba077e0 -->

<!-- START_f42e6a6d4adf366dbd4722cfd955114b -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/surcharge/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/surcharge/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/homintec/surcharge/{surcharge}/edit`


<!-- END_f42e6a6d4adf366dbd4722cfd955114b -->

<!-- START_82cc5083ad9f29e2b11490e1219f1f1d -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/homintec/surcharge/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/surcharge/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/homintec/surcharge/{surcharge}`

`PATCH api/homintec/surcharge/{surcharge}`


<!-- END_82cc5083ad9f29e2b11490e1219f1f1d -->

<!-- START_f0e7351b7903160ee1c929aa406643a9 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/homintec/surcharge/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/surcharge/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/homintec/surcharge/{surcharge}`


<!-- END_f0e7351b7903160ee1c929aa406643a9 -->

<!-- START_3880c7d0b8b222f6813f66df2c93f117 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/validation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/validation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/homintec/validation`


<!-- END_3880c7d0b8b222f6813f66df2c93f117 -->

<!-- START_bf32cba752f731d7e74ec80130066696 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/validation/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/validation/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/homintec/validation/create`


<!-- END_bf32cba752f731d7e74ec80130066696 -->

<!-- START_2484bae3e04a7540ba2b6dd261248319 -->
## api/homintec/validation
> Example request:

```bash
curl -X POST \
    "http://localhost/api/homintec/validation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/validation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/homintec/validation`


<!-- END_2484bae3e04a7540ba2b6dd261248319 -->

<!-- START_e09bc75de116ad903a0abc6c320e58c1 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/validation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/validation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/homintec/validation/{validation}`


<!-- END_e09bc75de116ad903a0abc6c320e58c1 -->

<!-- START_c2246342137a1002ed04a4f16e452761 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/validation/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/validation/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/homintec/validation/{validation}/edit`


<!-- END_c2246342137a1002ed04a4f16e452761 -->

<!-- START_5fb1df904f2c20938f50fd91a1455efd -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/homintec/validation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/validation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/homintec/validation/{validation}`

`PATCH api/homintec/validation/{validation}`


<!-- END_5fb1df904f2c20938f50fd91a1455efd -->

<!-- START_745854338e9825e26e8b8bb647338236 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/homintec/validation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/validation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/homintec/validation/{validation}`


<!-- END_745854338e9825e26e8b8bb647338236 -->

<!-- START_c9011d32b034cba8ddb80d11dc1dc70f -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/redditionUemoi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/redditionUemoi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/homintec/redditionUemoi`


<!-- END_c9011d32b034cba8ddb80d11dc1dc70f -->

<!-- START_1336474a6e7269c98d121e1f7082c336 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/redditionUemoi/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/redditionUemoi/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/homintec/redditionUemoi/create`


<!-- END_1336474a6e7269c98d121e1f7082c336 -->

<!-- START_fb0b246e5883fb220abbcd0ece547b7f -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/homintec/redditionUemoi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/redditionUemoi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/homintec/redditionUemoi`


<!-- END_fb0b246e5883fb220abbcd0ece547b7f -->

<!-- START_73b1fd056ebbf95034ab3f1914ad2f25 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/redditionUemoi/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/redditionUemoi/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/homintec/redditionUemoi/{redditionUemoi}`


<!-- END_73b1fd056ebbf95034ab3f1914ad2f25 -->

<!-- START_9afa8da7202ae794eab6e672fa8b07ec -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/redditionUemoi/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/redditionUemoi/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/homintec/redditionUemoi/{redditionUemoi}/edit`


<!-- END_9afa8da7202ae794eab6e672fa8b07ec -->

<!-- START_186f4a6b115bd199bc8e76a5a30acd84 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/homintec/redditionUemoi/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/redditionUemoi/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/homintec/redditionUemoi/{redditionUemoi}`

`PATCH api/homintec/redditionUemoi/{redditionUemoi}`


<!-- END_186f4a6b115bd199bc8e76a5a30acd84 -->

<!-- START_bda7df6a875cad7484dd7e6b91d21335 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/homintec/redditionUemoi/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/redditionUemoi/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/homintec/redditionUemoi/{redditionUemoi}`


<!-- END_bda7df6a875cad7484dd7e6b91d21335 -->

<!-- START_bae15cc55356d28ab4382a1be08f5138 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/surchargeUemoi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/surchargeUemoi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/homintec/surchargeUemoi`


<!-- END_bae15cc55356d28ab4382a1be08f5138 -->

<!-- START_b8d3e95ddd3667a3f8cf50aa4bbd6fbe -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/surchargeUemoi/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/surchargeUemoi/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/homintec/surchargeUemoi/create`


<!-- END_b8d3e95ddd3667a3f8cf50aa4bbd6fbe -->

<!-- START_3fd2f8f2ba644ec9e581ebe649ed001a -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/homintec/surchargeUemoi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/surchargeUemoi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/homintec/surchargeUemoi`


<!-- END_3fd2f8f2ba644ec9e581ebe649ed001a -->

<!-- START_670ef96439cf7717b5dd586a3a3471d8 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/surchargeUemoi/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/surchargeUemoi/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/homintec/surchargeUemoi/{surchargeUemoi}`


<!-- END_670ef96439cf7717b5dd586a3a3471d8 -->

<!-- START_abcca117e052cfae2e39257c78d26442 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/surchargeUemoi/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/surchargeUemoi/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/homintec/surchargeUemoi/{surchargeUemoi}/edit`


<!-- END_abcca117e052cfae2e39257c78d26442 -->

<!-- START_eaa4f76c3c7ecdf78ec837e846089ab9 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/homintec/surchargeUemoi/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/surchargeUemoi/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/homintec/surchargeUemoi/{surchargeUemoi}`

`PATCH api/homintec/surchargeUemoi/{surchargeUemoi}`


<!-- END_eaa4f76c3c7ecdf78ec837e846089ab9 -->

<!-- START_301a82cbe2dec2db59bf8b374910105d -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/homintec/surchargeUemoi/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/surchargeUemoi/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/homintec/surchargeUemoi/{surchargeUemoi}`


<!-- END_301a82cbe2dec2db59bf8b374910105d -->

<!-- START_7632ce91af01773e31781c6c31b09c01 -->
## api/homintec/comptage
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/comptage" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/comptage"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/homintec/comptage`


<!-- END_7632ce91af01773e31781c6c31b09c01 -->

<!-- START_cffbd1073f06b0df7070ede24c0a09fd -->
## api/homintec/comptage
> Example request:

```bash
curl -X POST \
    "http://localhost/api/homintec/comptage" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/comptage"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/homintec/comptage`


<!-- END_cffbd1073f06b0df7070ede24c0a09fd -->

<!-- START_a15dfcf3d054cd07ae0c3bffa02e51ed -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/hydrocarbure" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/hydrocarbure"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/homintec/hydrocarbure`


<!-- END_a15dfcf3d054cd07ae0c3bffa02e51ed -->

<!-- START_0cafe1472d09fe007e71edc01bc899ee -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/hydrocarbure/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/hydrocarbure/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/homintec/hydrocarbure/create`


<!-- END_0cafe1472d09fe007e71edc01bc899ee -->

<!-- START_66f9b82fe38cef7c02e0537334ae2ba5 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/homintec/hydrocarbure" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/hydrocarbure"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/homintec/hydrocarbure`


<!-- END_66f9b82fe38cef7c02e0537334ae2ba5 -->

<!-- START_7bfd9f88694a7bb2c9f14a2482a68a2e -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/hydrocarbure/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/hydrocarbure/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/homintec/hydrocarbure/{hydrocarbure}`


<!-- END_7bfd9f88694a7bb2c9f14a2482a68a2e -->

<!-- START_58b97d0233702df8e23ba26800f5cfdc -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/hydrocarbure/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/hydrocarbure/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/homintec/hydrocarbure/{hydrocarbure}/edit`


<!-- END_58b97d0233702df8e23ba26800f5cfdc -->

<!-- START_0f6a625ff0546b71fb5e6b7d0afc7bd2 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/homintec/hydrocarbure/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/hydrocarbure/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/homintec/hydrocarbure/{hydrocarbure}`

`PATCH api/homintec/hydrocarbure/{hydrocarbure}`


<!-- END_0f6a625ff0546b71fb5e6b7d0afc7bd2 -->

<!-- START_ba16b4156853a8118524809774ad3acf -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/homintec/hydrocarbure/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/hydrocarbure/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/homintec/hydrocarbure/{hydrocarbure}`


<!-- END_ba16b4156853a8118524809774ad3acf -->

<!-- START_678edc6378c9b755da50dea55d3e28cb -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/cashFlow" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/cashFlow"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/homintec/cashFlow`


<!-- END_678edc6378c9b755da50dea55d3e28cb -->

<!-- START_2a9f1350247887d09782104904e60e70 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/cashFlow/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/cashFlow/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/homintec/cashFlow/create`


<!-- END_2a9f1350247887d09782104904e60e70 -->

<!-- START_c19e70004bcac8d2b770508e55c43303 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/homintec/cashFlow" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/cashFlow"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/homintec/cashFlow`


<!-- END_c19e70004bcac8d2b770508e55c43303 -->

<!-- START_480512bf4f31f11ad8e109abc7826768 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/cashFlow/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/cashFlow/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/homintec/cashFlow/{cashFlow}`


<!-- END_480512bf4f31f11ad8e109abc7826768 -->

<!-- START_8d5bc5035d63418cb6130bfe3af5d7f0 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/cashFlow/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/cashFlow/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/homintec/cashFlow/{cashFlow}/edit`


<!-- END_8d5bc5035d63418cb6130bfe3af5d7f0 -->

<!-- START_8b12bf7e2fc6019f1b723819afc9fd24 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/homintec/cashFlow/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/cashFlow/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/homintec/cashFlow/{cashFlow}`

`PATCH api/homintec/cashFlow/{cashFlow}`


<!-- END_8b12bf7e2fc6019f1b723819afc9fd24 -->

<!-- START_d9892c2a5a7258c7f4fb50de53ee687b -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/homintec/cashFlow/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/cashFlow/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/homintec/cashFlow/{cashFlow}`


<!-- END_d9892c2a5a7258c7f4fb50de53ee687b -->

<!-- START_c30d88461173df6caf7f15a93abe0402 -->
## api/homintec/penalite
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/penalite" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/penalite"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/homintec/penalite`


<!-- END_c30d88461173df6caf7f15a93abe0402 -->

<!-- START_d88f7f65e979610ce37e037742b88dbd -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/penalite/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/penalite/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/homintec/penalite/create`


<!-- END_d88f7f65e979610ce37e037742b88dbd -->

<!-- START_b19ab2acde965d4f9fe7060b669abb87 -->
## api/homintec/penalite
> Example request:

```bash
curl -X POST \
    "http://localhost/api/homintec/penalite" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/penalite"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/homintec/penalite`


<!-- END_b19ab2acde965d4f9fe7060b669abb87 -->

<!-- START_7423cac076d413aa4c4f442f2eb80136 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/penalite/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/penalite/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/homintec/penalite/{penalite}`


<!-- END_7423cac076d413aa4c4f442f2eb80136 -->

<!-- START_d4a8e12e3b3ecdfe35e05deca9e9e059 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/penalite/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/penalite/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/homintec/penalite/{penalite}/edit`


<!-- END_d4a8e12e3b3ecdfe35e05deca9e9e059 -->

<!-- START_9cdd5b4c5604fcd0bd2f4f5ee899b2f1 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/homintec/penalite/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/penalite/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/homintec/penalite/{penalite}`

`PATCH api/homintec/penalite/{penalite}`


<!-- END_9cdd5b4c5604fcd0bd2f4f5ee899b2f1 -->

<!-- START_7be3c9e3745bfb2f2d8738455068e9c1 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/homintec/penalite/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/penalite/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/homintec/penalite/{penalite}`


<!-- END_7be3c9e3745bfb2f2d8738455068e9c1 -->

<!-- START_076e23cf67cca53827f367a3457b2fce -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/douanes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/douanes"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/homintec/douanes`


<!-- END_076e23cf67cca53827f367a3457b2fce -->

<!-- START_b5644086d680d4fe653777d30d6d9117 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/douanes/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/douanes/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/homintec/douanes/create`


<!-- END_b5644086d680d4fe653777d30d6d9117 -->

<!-- START_2b39cc7bee546a6fb5e92c9cdfc062cd -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/homintec/douanes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/douanes"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/homintec/douanes`


<!-- END_2b39cc7bee546a6fb5e92c9cdfc062cd -->

<!-- START_ae036903e2a797cae6f8f5b77ac344ec -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/douanes/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/douanes/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/homintec/douanes/{douane}`


<!-- END_ae036903e2a797cae6f8f5b77ac344ec -->

<!-- START_2854eba8f2e5dd05e6d5b2c43bbe7015 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/douanes/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/douanes/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/homintec/douanes/{douane}/edit`


<!-- END_2854eba8f2e5dd05e6d5b2c43bbe7015 -->

<!-- START_2b2c226647e7802a1eb3f8f05e734c42 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/homintec/douanes/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/douanes/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/homintec/douanes/{douane}`

`PATCH api/homintec/douanes/{douane}`


<!-- END_2b2c226647e7802a1eb3f8f05e734c42 -->

<!-- START_ce76b88db05d5eee68db4bc4f063d671 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/homintec/douanes/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/douanes/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/homintec/douanes/{douane}`


<!-- END_ce76b88db05d5eee68db4bc4f063d671 -->

<!-- START_ed9f9ce7a416f25c706771b6674a470d -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/comptageChecked" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/comptageChecked"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/homintec/comptageChecked`


<!-- END_ed9f9ce7a416f25c706771b6674a470d -->

<!-- START_cb7cd39ae0bf2fd2c81ac22d3b8327bd -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/comptageChecked/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/comptageChecked/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/homintec/comptageChecked/create`


<!-- END_cb7cd39ae0bf2fd2c81ac22d3b8327bd -->

<!-- START_6a48d30b57a9256e840b2427ae945e89 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/homintec/comptageChecked" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/comptageChecked"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/homintec/comptageChecked`


<!-- END_6a48d30b57a9256e840b2427ae945e89 -->

<!-- START_c2d722799f0495377779850556cd6695 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/comptageChecked/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/comptageChecked/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/homintec/comptageChecked/{comptageChecked}`


<!-- END_c2d722799f0495377779850556cd6695 -->

<!-- START_cc0e6e23ee232c9c0b363c86d5bac548 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/comptageChecked/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/comptageChecked/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/homintec/comptageChecked/{comptageChecked}/edit`


<!-- END_cc0e6e23ee232c9c0b363c86d5bac548 -->

<!-- START_4e5dc6e4fb013c1058cc8e1ec27bd71d -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/homintec/comptageChecked/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/comptageChecked/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/homintec/comptageChecked/{comptageChecked}`

`PATCH api/homintec/comptageChecked/{comptageChecked}`


<!-- END_4e5dc6e4fb013c1058cc8e1ec27bd71d -->

<!-- START_225e3f06af493182d7202e0033729c8b -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/homintec/comptageChecked/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/comptageChecked/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/homintec/comptageChecked/{comptageChecked}`


<!-- END_225e3f06af493182d7202e0033729c8b -->

<!-- START_189e28d43aa3c936bbc628425b5f342f -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/violation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/violation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/homintec/violation`


<!-- END_189e28d43aa3c936bbc628425b5f342f -->

<!-- START_2fa732a39d25da55033a9df698d5daf2 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/violation/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/violation/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/homintec/violation/create`


<!-- END_2fa732a39d25da55033a9df698d5daf2 -->

<!-- START_49343999247088c5c6dbb3297283e729 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/homintec/violation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/violation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/homintec/violation`


<!-- END_49343999247088c5c6dbb3297283e729 -->

<!-- START_307e820059f1cf94c01ade344efe66ee -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/violation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/violation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/homintec/violation/{violation}`


<!-- END_307e820059f1cf94c01ade344efe66ee -->

<!-- START_0fb38ad8be10f1f6ecc9259485ad67a7 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/violation/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/violation/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/homintec/violation/{violation}/edit`


<!-- END_0fb38ad8be10f1f6ecc9259485ad67a7 -->

<!-- START_005c850232d26769977a0e20960068ca -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/homintec/violation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/violation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/homintec/violation/{violation}`

`PATCH api/homintec/violation/{violation}`


<!-- END_005c850232d26769977a0e20960068ca -->

<!-- START_4076b17157bbc3d186d4fcfd10665a5c -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/homintec/violation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/violation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/homintec/violation/{violation}`


<!-- END_4076b17157bbc3d186d4fcfd10665a5c -->

<!-- START_696f6b15529938f5827bcc9768dc62b5 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/transfert" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/transfert"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/homintec/transfert`


<!-- END_696f6b15529938f5827bcc9768dc62b5 -->

<!-- START_087231190365c8b3f838fde95cda6e70 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/transfert/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/transfert/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/homintec/transfert/create`


<!-- END_087231190365c8b3f838fde95cda6e70 -->

<!-- START_c5720ef60c88a0d9fd6059fd2a7ef883 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/homintec/transfert" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/transfert"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/homintec/transfert`


<!-- END_c5720ef60c88a0d9fd6059fd2a7ef883 -->

<!-- START_8332da735f0978775d3ebe9807de42a4 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/transfert/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/transfert/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/homintec/transfert/{transfert}`


<!-- END_8332da735f0978775d3ebe9807de42a4 -->

<!-- START_2385125e478bcdbe44b638e37a039a6b -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/transfert/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/transfert/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/homintec/transfert/{transfert}/edit`


<!-- END_2385125e478bcdbe44b638e37a039a6b -->

<!-- START_a1634cba93cfca15360969e50887208a -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/homintec/transfert/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/transfert/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/homintec/transfert/{transfert}`

`PATCH api/homintec/transfert/{transfert}`


<!-- END_a1634cba93cfca15360969e50887208a -->

<!-- START_b05b2e281dfb0bc62838a135dd5b49fa -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/homintec/transfert/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/transfert/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/homintec/transfert/{transfert}`


<!-- END_b05b2e281dfb0bc62838a135dd5b49fa -->

<!-- START_eacde28221bcd1ef993390acbfd9c4be -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/logsAdmin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/logsAdmin"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/homintec/logsAdmin`


<!-- END_eacde28221bcd1ef993390acbfd9c4be -->

<!-- START_5660a5dfbcfc8007fbd152dddfc2aa73 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/logsAdmin/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/logsAdmin/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/homintec/logsAdmin/create`


<!-- END_5660a5dfbcfc8007fbd152dddfc2aa73 -->

<!-- START_132833e857976d60aac1878dc2600bc1 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/homintec/logsAdmin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/logsAdmin"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/homintec/logsAdmin`


<!-- END_132833e857976d60aac1878dc2600bc1 -->

<!-- START_22910329aff12ee39ec8a4615d804664 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/logsAdmin/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/logsAdmin/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/homintec/logsAdmin/{logsAdmin}`


<!-- END_22910329aff12ee39ec8a4615d804664 -->

<!-- START_6dd28dc75ba57253928a9a627c00d524 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/logsAdmin/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/logsAdmin/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/homintec/logsAdmin/{logsAdmin}/edit`


<!-- END_6dd28dc75ba57253928a9a627c00d524 -->

<!-- START_be772f64c23dee2a74489e37e0b41c89 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/homintec/logsAdmin/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/logsAdmin/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/homintec/logsAdmin/{logsAdmin}`

`PATCH api/homintec/logsAdmin/{logsAdmin}`


<!-- END_be772f64c23dee2a74489e37e0b41c89 -->

<!-- START_bfd944ceb8bc7af2902175b3eca94965 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/homintec/logsAdmin/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/logsAdmin/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/homintec/logsAdmin/{logsAdmin}`


<!-- END_bfd944ceb8bc7af2902175b3eca94965 -->

<!-- START_b0c94b717bcc9afdf2d18d2a38e6a52e -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/ptac" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/ptac"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/homintec/ptac`


<!-- END_b0c94b717bcc9afdf2d18d2a38e6a52e -->

<!-- START_fa21f8d64e9b75da90a0fd3dacd92705 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/ptac/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/ptac/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/homintec/ptac/create`


<!-- END_fa21f8d64e9b75da90a0fd3dacd92705 -->

<!-- START_7e83f22ebb7c9bc02b24e2e5c7c3a0bd -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/homintec/ptac" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/ptac"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/homintec/ptac`


<!-- END_7e83f22ebb7c9bc02b24e2e5c7c3a0bd -->

<!-- START_6253a98b8adf033e9aa585dd4bf7f613 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/ptac/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/ptac/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/homintec/ptac/{ptac}`


<!-- END_6253a98b8adf033e9aa585dd4bf7f613 -->

<!-- START_0b50c2a50f59abf0d92ce5e9f1013630 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/ptac/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/ptac/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/homintec/ptac/{ptac}/edit`


<!-- END_0b50c2a50f59abf0d92ce5e9f1013630 -->

<!-- START_2704696a0badbabcd1d6e435bcb7fbed -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/homintec/ptac/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/ptac/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/homintec/ptac/{ptac}`

`PATCH api/homintec/ptac/{ptac}`


<!-- END_2704696a0badbabcd1d6e435bcb7fbed -->

<!-- START_e3bde13ae5c42826082572ed27fe654a -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/homintec/ptac/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/ptac/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/homintec/ptac/{ptac}`


<!-- END_e3bde13ae5c42826082572ed27fe654a -->

<!-- START_b7cbb48fb17425ba02b27fdb385c2bf1 -->
## api/homintec/track/penalite/store
> Example request:

```bash
curl -X POST \
    "http://localhost/api/homintec/track/penalite/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/track/penalite/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/homintec/track/penalite/store`


<!-- END_b7cbb48fb17425ba02b27fdb385c2bf1 -->

<!-- START_845054fedf296f254deed763a609d8db -->
## api/homintec/fiche/techniques/store
> Example request:

```bash
curl -X POST \
    "http://localhost/api/homintec/fiche/techniques/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/fiche/techniques/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/homintec/fiche/techniques/store`


<!-- END_845054fedf296f254deed763a609d8db -->

<!-- START_321fa1aae2979e1c41b52e7302cdacc9 -->
## api/homintec/fiche/techniques/get
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/fiche/techniques/get" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/fiche/techniques/get"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/homintec/fiche/techniques/get`


<!-- END_321fa1aae2979e1c41b52e7302cdacc9 -->

<!-- START_d92037e5df4c62cd91bbcebb05d0bc49 -->
## api/homintec/checked/connexion
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/checked/connexion" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/checked/connexion"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
0
```

### HTTP Request
`GET api/homintec/checked/connexion`


<!-- END_d92037e5df4c62cd91bbcebb05d0bc49 -->

<!-- START_8bfb4fcecc12edb2d55518a6fdd7d00f -->
## api/homintec/comptage-sms
> Example request:

```bash
curl -X POST \
    "http://localhost/api/homintec/comptage-sms" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/comptage-sms"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/homintec/comptage-sms`


<!-- END_8bfb4fcecc12edb2d55518a6fdd7d00f -->

<!-- START_0a95246eeb3d04dbe817dc788230558d -->
## api/homintec/testupdate
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/homintec/testupdate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/testupdate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/homintec/testupdate`


<!-- END_0a95246eeb3d04dbe817dc788230558d -->

<!-- START_b0169c61ad94c280372a5a01844d7a5a -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/homintec/logs-save" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/logs-save"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/homintec/logs-save`


<!-- END_b0169c61ad94c280372a5a01844d7a5a -->

<!-- START_f1c7446dd294f49aaf3a94810dd0a950 -->
## api/homintec/update-validation
> Example request:

```bash
curl -X POST \
    "http://localhost/api/homintec/update-validation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/homintec/update-validation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/homintec/update-validation`


<!-- END_f1c7446dd294f49aaf3a94810dd0a950 -->

<!-- START_7c926f99a047c28c55c30209763d73d8 -->
## validation
> Example request:

```bash
curl -X GET \
    -G "http://localhost/validation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/validation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET validation`


<!-- END_7c926f99a047c28c55c30209763d73d8 -->

<!-- START_bb83d54a7c94434efb27633d08c790a9 -->
## validation-voie/{voie}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/validation-voie/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/validation-voie/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET validation-voie/{voie}`


<!-- END_bb83d54a7c94434efb27633d08c790a9 -->

<!-- START_6e218d04c2e68969aac4be75703c8767 -->
## validation-date
> Example request:

```bash
curl -X GET \
    -G "http://localhost/validation-date" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/validation-date"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET validation-date`


<!-- END_6e218d04c2e68969aac4be75703c8767 -->

<!-- START_9bfd4cec01a59206fef0d6717c52f2f1 -->
## validation-by-site
> Example request:

```bash
curl -X GET \
    -G "http://localhost/validation-by-site" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/validation-by-site"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET validation-by-site`


<!-- END_9bfd4cec01a59206fef0d6717c52f2f1 -->

<!-- START_975600e8d9b4b6f84c03f7c3a451b8a2 -->
## validation-search
> Example request:

```bash
curl -X GET \
    -G "http://localhost/validation-search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/validation-search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET validation-search`


<!-- END_975600e8d9b4b6f84c03f7c3a451b8a2 -->

<!-- START_e24f9eb5ace8f29fa469d65b453cc795 -->
## validation-search-site
> Example request:

```bash
curl -X GET \
    -G "http://localhost/validation-search-site" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/validation-search-site"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET validation-search-site`


<!-- END_e24f9eb5ace8f29fa469d65b453cc795 -->

<!-- START_bd3804a5ac7b65226b784897adf62250 -->
## recette.percepteur-index
> Example request:

```bash
curl -X GET \
    -G "http://localhost/recette.percepteur-index" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/recette.percepteur-index"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET recette.percepteur-index`


<!-- END_bd3804a5ac7b65226b784897adf62250 -->

<!-- START_6a03ad6273e61fcc852b629ee9c011d5 -->
## reddition2
> Example request:

```bash
curl -X POST \
    "http://localhost/reddition2" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/reddition2"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST reddition2`


<!-- END_6a03ad6273e61fcc852b629ee9c011d5 -->

<!-- START_ee36f63b967ee5c1e2d3f60e87e0cb8c -->
## redition2-search
> Example request:

```bash
curl -X GET \
    -G "http://localhost/redition2-search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/redition2-search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET redition2-search`


<!-- END_ee36f63b967ee5c1e2d3f60e87e0cb8c -->

<!-- START_bef7e777f5b8ee7ae7c69935a4132f64 -->
## redition2-day
> Example request:

```bash
curl -X GET \
    -G "http://localhost/redition2-day" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/redition2-day"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET redition2-day`


<!-- END_bef7e777f5b8ee7ae7c69935a4132f64 -->

<!-- START_0cbbd0b5efdd195f97eeff2cd3f8b9fc -->
## redition2-month
> Example request:

```bash
curl -X GET \
    -G "http://localhost/redition2-month" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/redition2-month"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET redition2-month`


<!-- END_0cbbd0b5efdd195f97eeff2cd3f8b9fc -->

<!-- START_441dd543a9a82af367b05b35bb3e12d9 -->
## redition-uemoi
> Example request:

```bash
curl -X GET \
    -G "http://localhost/redition-uemoi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/redition-uemoi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET redition-uemoi`


<!-- END_441dd543a9a82af367b05b35bb3e12d9 -->

<!-- START_0eb843462c44d77114cf9a4b4af3d351 -->
## redition-uemoi-day
> Example request:

```bash
curl -X GET \
    -G "http://localhost/redition-uemoi-day" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/redition-uemoi-day"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET redition-uemoi-day`


<!-- END_0eb843462c44d77114cf9a4b4af3d351 -->

<!-- START_9359a12c8f707b61f8d8a7d695e6f51a -->
## redition-uemoi-month
> Example request:

```bash
curl -X GET \
    -G "http://localhost/redition-uemoi-month" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/redition-uemoi-month"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET redition-uemoi-month`


<!-- END_9359a12c8f707b61f8d8a7d695e6f51a -->

<!-- START_212526f5590946bc5f39076e20220b52 -->
## redition-uemoi-search
> Example request:

```bash
curl -X GET \
    -G "http://localhost/redition-uemoi-search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/redition-uemoi-search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET redition-uemoi-search`


<!-- END_212526f5590946bc5f39076e20220b52 -->

<!-- START_f3c9e84d5c43d0a339cefca5a0e453f8 -->
## surchages/{site}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/surchages/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/surchages/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET surchages/{site}`


<!-- END_f3c9e84d5c43d0a339cefca5a0e453f8 -->

<!-- START_b5eff48842ba8ee5bb7ae8c291fdd516 -->
## surchages2/{site}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/surchages2/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/surchages2/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET surchages2/{site}`


<!-- END_b5eff48842ba8ee5bb7ae8c291fdd516 -->

<!-- START_3191b012d21b499ad3ca865d7e0c927b -->
## surchages/uemoi/{site}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/surchages/uemoi/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/surchages/uemoi/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET surchages/uemoi/{site}`


<!-- END_3191b012d21b499ad3ca865d7e0c927b -->

<!-- START_ca2358bc6ff805abef186ed20e3c3d84 -->
## hydro-date
> Example request:

```bash
curl -X POST \
    "http://localhost/hydro-date" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/hydro-date"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST hydro-date`


<!-- END_ca2358bc6ff805abef186ed20e3c3d84 -->

<!-- START_17783a7305d4b95ec61bb2707733ca6d -->
## hydro-search
> Example request:

```bash
curl -X GET \
    -G "http://localhost/hydro-search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/hydro-search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET hydro-search`


<!-- END_17783a7305d4b95ec61bb2707733ca6d -->

<!-- START_820378157eff0f64bbdddccd5d57bfb1 -->
## hydro-day
> Example request:

```bash
curl -X GET \
    -G "http://localhost/hydro-day" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/hydro-day"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET hydro-day`


<!-- END_820378157eff0f64bbdddccd5d57bfb1 -->

<!-- START_50d0f4d6193cf8725266398fc12aee7d -->
## hydro-month
> Example request:

```bash
curl -X GET \
    -G "http://localhost/hydro-month" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/hydro-month"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET hydro-month`


<!-- END_50d0f4d6193cf8725266398fc12aee7d -->

<!-- START_27d6938aa10d935679ea5cac38138721 -->
## recettetogo/{site}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/recettetogo/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/recettetogo/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET recettetogo/{site}`


<!-- END_27d6938aa10d935679ea5cac38138721 -->

<!-- START_c1aa27515bf03f12d5698af59e31585a -->
## test
> Example request:

```bash
curl -X GET \
    -G "http://localhost/test" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/test"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET test`


<!-- END_c1aa27515bf03f12d5698af59e31585a -->

<!-- START_53be1e9e10a08458929a2e0ea70ddb86 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET /`


<!-- END_53be1e9e10a08458929a2e0ea70ddb86 -->

<!-- START_89966bfb9ab533cc3249b91a9090d3dc -->
## users
> Example request:

```bash
curl -X GET \
    -G "http://localhost/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET users`


<!-- END_89966bfb9ab533cc3249b91a9090d3dc -->

<!-- START_04094f136cb91c117bde084191e6859d -->
## users/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/users/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/users/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET users/create`


<!-- END_04094f136cb91c117bde084191e6859d -->

<!-- START_57a8a4ba671355511e22780b1b63690e -->
## users
> Example request:

```bash
curl -X POST \
    "http://localhost/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST users`


<!-- END_57a8a4ba671355511e22780b1b63690e -->

<!-- START_9c6e6c2d3215b1ba7d13468e7cd95e62 -->
## users/{user}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/users/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/users/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET users/{user}/edit`


<!-- END_9c6e6c2d3215b1ba7d13468e7cd95e62 -->

<!-- START_7fe085c671e1b3d51e86136538b1d63f -->
## users/{user}
> Example request:

```bash
curl -X PUT \
    "http://localhost/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT users/{user}`

`PATCH users/{user}`


<!-- END_7fe085c671e1b3d51e86136538b1d63f -->

<!-- START_a948aef61c80bf96137d023464fde21f -->
## users/{user}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE users/{user}`


<!-- END_a948aef61c80bf96137d023464fde21f -->

<!-- START_4091d22f131f488e2df113a645f6e566 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/surcharge-manuel/create/index/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/surcharge-manuel/create/index/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET surcharge-manuel/create/index/{type?}`


<!-- END_4091d22f131f488e2df113a645f6e566 -->

<!-- START_ce82916cc85e76c08b1648f10f181d7e -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/surcharge-manuel/create/annuel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/surcharge-manuel/create/annuel"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET surcharge-manuel/create/annuel`


<!-- END_ce82916cc85e76c08b1648f10f181d7e -->

<!-- START_23ac25f187f41139e954209033a46352 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/surcharge-manuel/create//" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/surcharge-manuel/create//"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET surcharge-manuel/create/{voie?}/{type?}`


<!-- END_23ac25f187f41139e954209033a46352 -->

<!-- START_1a12b720e3faaf257c4f22c529baddf2 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/surcharge-manuel/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/surcharge-manuel/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET surcharge-manuel/{site?}`


<!-- END_1a12b720e3faaf257c4f22c529baddf2 -->

<!-- START_3648b6295e801a36df381bcde028e66e -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/surcharge-manuel-request/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/surcharge-manuel-request/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET surcharge-manuel-request/{type?}`


<!-- END_3648b6295e801a36df381bcde028e66e -->

<!-- START_cfeb09acdd803e36f60309af27e09f36 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/surcharge-manuel-request-anuller" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/surcharge-manuel-request-anuller"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET surcharge-manuel-request-anuller`


<!-- END_cfeb09acdd803e36f60309af27e09f36 -->

<!-- START_cada437571664628bc99a4c0fa8f7384 -->
## surcharge-manuel-store
> Example request:

```bash
curl -X GET \
    -G "http://localhost/surcharge-manuel-store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/surcharge-manuel-store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET surcharge-manuel-store`


<!-- END_cada437571664628bc99a4c0fa8f7384 -->

<!-- START_12473b020ba743dedccebe7f91f84f23 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/surcharge-manuel/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/surcharge-manuel/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST surcharge-manuel/{voie?}`


<!-- END_12473b020ba743dedccebe7f91f84f23 -->

<!-- START_d7124e1ac011baa445f91513696e59ea -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/surcharge-manuel/edit/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/surcharge-manuel/edit/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET surcharge-manuel/edit/{surcharge_manuel}`


<!-- END_d7124e1ac011baa445f91513696e59ea -->

<!-- START_a03f9dcf89ee44b08c992c3cf3f66110 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/surcharge-manuel/destroy/1/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/surcharge-manuel/destroy/1/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE surcharge-manuel/destroy/{surcharge_manuel}/{site?}`


<!-- END_a03f9dcf89ee44b08c992c3cf3f66110 -->

<!-- START_5dff8d1d48acdcbf58faae32f1919a25 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/surcharge-manuel/update/1  " \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/surcharge-manuel/update/1  "
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT surcharge-manuel/update/{surcharge_manuel}  `


<!-- END_5dff8d1d48acdcbf58faae32f1919a25 -->

<!-- START_307b08d0c429ca6e03567004750bfd8c -->
## surcharge-manuel-site/{type?}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/surcharge-manuel-site/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/surcharge-manuel-site/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET surcharge-manuel-site/{type?}`


<!-- END_307b08d0c429ca6e03567004750bfd8c -->

<!-- START_34ff88aa52776116d8a4b3d7e77b9b78 -->
## cashFlow/day/web
> Example request:

```bash
curl -X GET \
    -G "http://localhost/cashFlow/day/web" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/cashFlow/day/web"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET cashFlow/day/web`


<!-- END_34ff88aa52776116d8a4b3d7e77b9b78 -->

<!-- START_0b2dce500f3d5ba1b2521645ec254141 -->
## cashFlow/month/web
> Example request:

```bash
curl -X GET \
    -G "http://localhost/cashFlow/month/web" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/cashFlow/month/web"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET cashFlow/month/web`


<!-- END_0b2dce500f3d5ba1b2521645ec254141 -->

<!-- START_5f61820cc02832cb7925c85ebd75fbe1 -->
## cashFlow/index/web/day
> Example request:

```bash
curl -X GET \
    -G "http://localhost/cashFlow/index/web/day" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/cashFlow/index/web/day"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET cashFlow/index/web/day`


<!-- END_5f61820cc02832cb7925c85ebd75fbe1 -->

<!-- START_3bb19952389e77db44605fbdd414e346 -->
## cashFlow/index/web/month
> Example request:

```bash
curl -X GET \
    -G "http://localhost/cashFlow/index/web/month" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/cashFlow/index/web/month"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET cashFlow/index/web/month`


<!-- END_3bb19952389e77db44605fbdd414e346 -->

<!-- START_4fa53dcdd042f52a2ce07de47e32ce30 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/recette-save" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/recette-save"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST recette-save`


<!-- END_4fa53dcdd042f52a2ce07de47e32ce30 -->

<!-- START_8d01cbd57e2ddfa03157c4d7961c511a -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/recette-index/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/recette-index/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET recette-index/{voie?}`


<!-- END_8d01cbd57e2ddfa03157c4d7961c511a -->

<!-- START_b5ba35655add1faa4a2bf346fa81eb5d -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/recette-create/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/recette-create/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET recette-create/{voie?}`


<!-- END_b5ba35655add1faa4a2bf346fa81eb5d -->

<!-- START_1a841cf790762761e9e778f606580c88 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/recette/create/index" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/recette/create/index"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET recette/create/index`


<!-- END_1a841cf790762761e9e778f606580c88 -->

<!-- START_9f195c7a804be8c7e3f8e60513e0d361 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/recette/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/recette/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET recette/{id}`


<!-- END_9f195c7a804be8c7e3f8e60513e0d361 -->

<!-- START_057822bee4519e5c68f6c50485698c2d -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/recette/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/recette/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT recette/{id}`


<!-- END_057822bee4519e5c68f6c50485698c2d -->

<!-- START_93798bb499ef7806fd98fe7b186d6abb -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/recette/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/recette/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE recette/{id}`


<!-- END_93798bb499ef7806fd98fe7b186d6abb -->

<!-- START_f2aa1f3d64c63bbb3de6743d2c7a096f -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/recette-get-month" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/recette-get-month"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET recette-get-month`


<!-- END_f2aa1f3d64c63bbb3de6743d2c7a096f -->

<!-- START_0b14ca67041d7ddf332d109a43985217 -->
## recette.percepteur
> Example request:

```bash
curl -X GET \
    -G "http://localhost/recette.percepteur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/recette.percepteur"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET recette.percepteur`


<!-- END_0b14ca67041d7ddf332d109a43985217 -->

<!-- START_09825ace1cd49a083e1cc7446e235e18 -->
## recette-view-month
> Example request:

```bash
curl -X GET \
    -G "http://localhost/recette-view-month" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/recette-view-month"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET recette-view-month`


<!-- END_09825ace1cd49a083e1cc7446e235e18 -->

<!-- START_6d6c85c90c89ee2451d8a1073e3d11c2 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/site-save" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/site-save"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST site-save`


<!-- END_6d6c85c90c89ee2451d8a1073e3d11c2 -->

<!-- START_63cf92909237385fcfbfcef24f59da19 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/site-index" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/site-index"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET site-index`


<!-- END_63cf92909237385fcfbfcef24f59da19 -->

<!-- START_664752631cddcba4673d102159937d6a -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/site-create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/site-create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET site-create`


<!-- END_664752631cddcba4673d102159937d6a -->

<!-- START_c7ec6fa97989004887d5629473cc715d -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/site/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/site/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET site/{id}`


<!-- END_c7ec6fa97989004887d5629473cc715d -->

<!-- START_cb48313a831f03c9475e6402fdc9e39f -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/site/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/site/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT site/{id}`


<!-- END_cb48313a831f03c9475e6402fdc9e39f -->

<!-- START_5942d831b0c7910229c0d0326215647f -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/voie-save" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/voie-save"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST voie-save`


<!-- END_5942d831b0c7910229c0d0326215647f -->

<!-- START_27dbed9378e6d302f38735361c1e80e1 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/voie-index" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/voie-index"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET voie-index`


<!-- END_27dbed9378e6d302f38735361c1e80e1 -->

<!-- START_86195a263dfdee22df02890e87a3c911 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/voie-create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/voie-create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET voie-create`


<!-- END_86195a263dfdee22df02890e87a3c911 -->

<!-- START_5e337550c44026b1046e4f553e4d9448 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/voie/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/voie/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET voie/{id}`


<!-- END_5e337550c44026b1046e4f553e4d9448 -->

<!-- START_2780f244948493c6d6f730d682f0e6e7 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/voie/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/voie/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT voie/{id}`


<!-- END_2780f244948493c6d6f730d682f0e6e7 -->

<!-- START_8f34158666518c87c58d940db25c26d5 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/sens-save" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/sens-save"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST sens-save`


<!-- END_8f34158666518c87c58d940db25c26d5 -->

<!-- START_fbf2d25fcc68dc192999c2b8b4092949 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/sens-index" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/sens-index"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET sens-index`


<!-- END_fbf2d25fcc68dc192999c2b8b4092949 -->

<!-- START_dca2b9f79f803508064bb45b7a6c1ff3 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/sens-create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/sens-create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET sens-create`


<!-- END_dca2b9f79f803508064bb45b7a6c1ff3 -->

<!-- START_f7dc5db1ffe08f99daf6852aed0f860b -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/sens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/sens/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET sens/{id}`


<!-- END_f7dc5db1ffe08f99daf6852aed0f860b -->

<!-- START_104fd7836230b2218898f26483c8525c -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/sens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/sens/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT sens/{id}`


<!-- END_104fd7836230b2218898f26483c8525c -->

<!-- START_e03d99dfb6471baffdb1123b61c90523 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/percepteur-save" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/percepteur-save"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST percepteur-save`


<!-- END_e03d99dfb6471baffdb1123b61c90523 -->

<!-- START_5a0d64ecda7163e3deff853bcfd22d49 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/percepteur-index" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/percepteur-index"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET percepteur-index`


<!-- END_5a0d64ecda7163e3deff853bcfd22d49 -->

<!-- START_37d2c037959284f10a1a2e757dc0eb5c -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/percepteur-create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/percepteur-create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET percepteur-create`


<!-- END_37d2c037959284f10a1a2e757dc0eb5c -->

<!-- START_54574b37be3bd5397c7cdc879377bf39 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/percepteur/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/percepteur/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET percepteur/{id}`


<!-- END_54574b37be3bd5397c7cdc879377bf39 -->

<!-- START_821385df0947d4c8f86d6ff1a339ceb6 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/percepteur/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/percepteur/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT percepteur/{id}`


<!-- END_821385df0947d4c8f86d6ff1a339ceb6 -->

<!-- START_155913b52abed36d8541a4372937f8d1 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/percepteur/update/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/percepteur/update/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT percepteur/update/{id}`


<!-- END_155913b52abed36d8541a4372937f8d1 -->

<!-- START_07db4a82bc10f2d52f36b7f146a1d83c -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/percepteur/edit/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/percepteur/edit/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET percepteur/edit/{id}`


<!-- END_07db4a82bc10f2d52f36b7f146a1d83c -->

<!-- START_0070f0257eb40785bdf763bf702bd0fb -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/vacation-save" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/vacation-save"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST vacation-save`


<!-- END_0070f0257eb40785bdf763bf702bd0fb -->

<!-- START_3f6b5f1f3d3d0a8d84a3084ad261292c -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/vacation-index" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/vacation-index"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET vacation-index`


<!-- END_3f6b5f1f3d3d0a8d84a3084ad261292c -->

<!-- START_fa146a14a72286161ca47bdbe9d07071 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/vacation-create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/vacation-create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET vacation-create`


<!-- END_fa146a14a72286161ca47bdbe9d07071 -->

<!-- START_b17de5946167853c23eefb3858208092 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/vacation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/vacation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET vacation/{id}`


<!-- END_b17de5946167853c23eefb3858208092 -->

<!-- START_119208246c562f0a02729694c11dd485 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/vacation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/vacation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT vacation/{id}`


<!-- END_119208246c562f0a02729694c11dd485 -->

<!-- START_8604b37d26b848447227721904078513 -->
## point-essieux
> Example request:

```bash
curl -X GET \
    -G "http://localhost/point-essieux" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/point-essieux"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET point-essieux`


<!-- END_8604b37d26b848447227721904078513 -->

<!-- START_88490dccc7f959eb0addcae4f4f04199 -->
## point-essieux/search
> Example request:

```bash
curl -X GET \
    -G "http://localhost/point-essieux/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/point-essieux/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET point-essieux/search`


<!-- END_88490dccc7f959eb0addcae4f4f04199 -->

<!-- START_474d1778a220608d99efc8a40a57938a -->
## point-percepteur
> Example request:

```bash
curl -X GET \
    -G "http://localhost/point-percepteur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/point-percepteur"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET point-percepteur`


<!-- END_474d1778a220608d99efc8a40a57938a -->

<!-- START_eb129bde98e08377cc1677b9d924af42 -->
## point-percepteur/search
> Example request:

```bash
curl -X GET \
    -G "http://localhost/point-percepteur/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/point-percepteur/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET point-percepteur/search`


<!-- END_eb129bde98e08377cc1677b9d924af42 -->

<!-- START_1178ef01a10226dddaa370cb3eb7e53f -->
## point-mensuel
> Example request:

```bash
curl -X GET \
    -G "http://localhost/point-mensuel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/point-mensuel"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET point-mensuel`


<!-- END_1178ef01a10226dddaa370cb3eb7e53f -->

<!-- START_9b6006de6d2a58c5d486295509047616 -->
## point-mensuel/search
> Example request:

```bash
curl -X GET \
    -G "http://localhost/point-mensuel/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/point-mensuel/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET point-mensuel/search`


<!-- END_9b6006de6d2a58c5d486295509047616 -->

<!-- START_c1b111fc5ec663014dd15c2ca16cbb43 -->
## point-mensuel-informatiser
> Example request:

```bash
curl -X GET \
    -G "http://localhost/point-mensuel-informatiser" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/point-mensuel-informatiser"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET point-mensuel-informatiser`


<!-- END_c1b111fc5ec663014dd15c2ca16cbb43 -->

<!-- START_539f02ff4b031ec2870fad65eef0144f -->
## point-mensuel-informatiser/getsearch
> Example request:

```bash
curl -X GET \
    -G "http://localhost/point-mensuel-informatiser/getsearch" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/point-mensuel-informatiser/getsearch"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET point-mensuel-informatiser/getsearch`


<!-- END_539f02ff4b031ec2870fad65eef0144f -->

<!-- START_f497f1f7d005ed681f077661b5a3f11b -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/logs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/logs"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET logs`


<!-- END_f497f1f7d005ed681f077661b5a3f11b -->

<!-- START_66e08d3cc8222573018fed49e121e96d -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET login`


<!-- END_66e08d3cc8222573018fed49e121e96d -->

<!-- START_ba35aa39474cb98cfb31829e70eb8b74 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST login`


<!-- END_ba35aa39474cb98cfb31829e70eb8b74 -->

<!-- START_e65925f23b9bc6b93d9356895f29f80c -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST logout`


<!-- END_e65925f23b9bc6b93d9356895f29f80c -->

<!-- START_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->
## Show the application registration form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET register`


<!-- END_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->

<!-- START_d7aad7b5ac127700500280d511a3db01 -->
## Handle a registration request for the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST register`


<!-- END_d7aad7b5ac127700500280d511a3db01 -->

<!-- START_d72797bae6d0b1f3a341ebb1f8900441 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset`


<!-- END_d72797bae6d0b1f3a341ebb1f8900441 -->

<!-- START_feb40f06a93c80d742181b6ffb6b734e -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST \
    "http://localhost/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/email`


<!-- END_feb40f06a93c80d742181b6ffb6b734e -->

<!-- START_e1605a6e5ceee9d1aeb7729216635fd7 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset/{token}`


<!-- END_e1605a6e5ceee9d1aeb7729216635fd7 -->

<!-- START_cafb407b7a846b31491f97719bb15aef -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://localhost/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/reset`


<!-- END_cafb407b7a846b31491f97719bb15aef -->

<!-- START_b77aedc454e9471a35dcb175278ec997 -->
## Display the password confirmation view.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET password/confirm`


<!-- END_b77aedc454e9471a35dcb175278ec997 -->

<!-- START_54462d3613f2262e741142161c0e6fea -->
## Confirm the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://localhost/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/confirm`


<!-- END_54462d3613f2262e741142161c0e6fea -->


