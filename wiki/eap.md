# EAP: Architecture Specification and Prototype

An Online Shop where you can increase your musical collection, buying discs and instruments, in an easy, accessible, safe and customizable way.

## A7: High-level architecture. Privileges. Web resources specification

This artifact contains the high-level architecture of our online shop, the privileges section with the permissions for each group of users and the specification of the web resources that will be used during the development of the work.

### 1. Overview

This section includes a table with the modules that will be part of our online shop. For each one of them, there is a brief description.

|ID and Name|Description of the Module|
|-|-|
| **M01: Authentication and Profile** | Web resources associated with user authentication and all the profile management pages. System features: signup, login and logout, view and update profile information. |
| **M02: Shop** | Web resources associated with all the products available on our shop. System features: search for products (simple and advanced search), view them all in the catalog and view the specific page for a single product, where the authenticated user can submit a review, add items to a shopping basket, complete an order from the products added previously to the shopping basket, track and order and return one or more products associated with one or more orders. |
| **M03: Inventory, Wishlist** | Web resources associated with inventory and wishlist. System features: add products to both wishlist and inventory and manage (update, remove) those products in those lists. |
 |**M04: User Administration** | Web resources associated with user management. System features: list users and manage them (add or delete), list products and manage them (add, update or remove - CRUD), manage manual payments, like bank transfers (accept or decline) and manage reviews submitted by authenticated users (delete). |
 |**M05: Static pages**| Web resources associated with static content. System features: about us, contact and social media pages.|

### 2. Permissions

This section presents a table with the permissions used in the modules described in the previous section in order to define the access to our shop resources. 

|Permission Code|Permission Name|Description of Permission|
|-|-|-|
| **VIS** | Visitor | User not registered (without privileges) |
| **CLI** | Client |  Authenticated users |
| **ADM** | Administrator | Administrators |
| **OWN** | Owner | Clients that are owners of something (e.g. personal information, products)

### 3. OpenAPI Specification

This section includes the OpenAPI specification in *yaml* format so that there is a description of the web resources used on our online shop.

Link to the [*yaml* file](https://git.fe.up.pt/lbaw/lbaw2021/lbaw2126/-/blob/master/a7_openapi.yaml)

Link to the [Swagger generated documentation](https://app.swaggerhub.com/apis-docs/LBAW-DiscoTech/DiscoTechAPI/1.0)

```yaml
openapi: 3.0.0

info:
  version: '1.0'
  title: 'LBAW Discotech Web API'
  description: 'Web Resources Specification (A7) for Discotech'

servers:
- url: http://lbaw2126.lbaw-prod.fe.up.pt
  description: Production server

externalDocs:
  description: Find more info here.
  url: https://git.fe.up.pt/lbaw/lbaw2021/lbaw2126/-/wikis/home

tags:
  - name: 'M01: Authentication and Profile'
  - name: 'M02: Shop'
  - name: 'M03: Inventory, Wishlist'
  - name: 'M04: User Administration'
  - name: 'M05: Static pages'

paths:

  /login:
    get:
      operationId: R101
      summary: 'R101: Login Form'
      description: 'Provide login form. Access: VIS'
      tags:
        - 'M01: Authentication and Profile'
      responses:
        '200':
          description: 'Ok. Show [UI04](https://git.fe.up.pt/lbaw/lbaw2021/lbaw2126/-/wikis/uploads/18abc901df0ce17f7c8b3ac5e321044b/login.png)'
    post:
      operationId: R102
      summary: 'R102: Login Action'
      description: 'Processes the login form submission. Access: VIS'
      tags:
        - 'M01: Authentication and Profile'
 
      requestBody:
        required: true
        content:
          application/x-www-form-urlencoded:
            schema:
              type: object
              properties:
                email:          # <!--- form field name
                  type: string
                password:    # <!--- form field name
                  type: string
              required:
                - email
                - password
 
      responses:
        '302':
          description: 'Redirect after processing the login credentials.'
          headers:
            Location:
              schema:
                type: string
              examples:
                302Success:
                  description: 'Successful authentication. Redirect to homepage.' #user profile
                  value: '/homepage-login' #?? '/users/{id}'
                302Error:
                  description: 'Failed authentication. Redirect to login form.'
                  value: '/login'
                  
  /logout:
    post:
      operationId: R103
      summary: 'R103: Logout Action'
      description: 'Logout the current authenticated used. Access: CLI, ADM'
      tags:
        - 'M01: Authentication and Profile'
      responses:
        '302':
          description: 'Redirect after processing logout.'
          headers:
            Location:
              schema:
                type: string
              examples:
                302Success:
                  description: 'Successful logout. Redirect to homepage.' #login form
                  value: '/index' #?? '/login'

  /register:
    get:
      operationId: R104
      summary: 'R104: Register Form'
      description: 'Provide new user registration form. Access: VIS'
      tags:
        - 'M01: Authentication and Profile'
      responses:
        '200':
          description: 'Ok. Show [UI05](https://git.fe.up.pt/lbaw/lbaw2021/lbaw2126/-/wikis/uploads/9c6c30164d417634a36f5d6063d0c495/signup.jpg)'

    post:
      operationId: R105
      summary: 'R105: Register Action'
      description: 'Processes the new user registration form submission. Access: VIS'
      tags:
        - 'M01: Authentication and Profile'

      requestBody:
        required: true
        content:
          application/x-www-form-urlencoded:
            schema:
              type: object
              properties:
                name:
                  type: string
                email:
                  type: string
                picture:
                  type: string
                  format: binary
              required:
                - email
                - password

      responses:
        '302':
          description: 'Redirect after processing the new user information.'
          headers:
            Location:
              schema:
                type: string
              examples:
                302Success:
                  description: 'Successful authentication. Redirect to user profile.'
                  value: '/users/{id}'
                302Failure:
                  description: 'Failed authentication. Redirect to login form.'
                  value: '/login'
                  
  /users/{id}:
    get:
      operationId: R106
      summary: 'R106: View user profile'
      description: 'Show the individual user profile. Access: CLI'
      tags:
        - 'M01: Authentication and Profile'

      parameters:
        - in: path
          name: id
          schema:
            type: integer
          required: true

      responses:
        '200':
          description: 'Ok. Show [UI06](https://git.fe.up.pt/lbaw/lbaw2021/lbaw2126/-/wikis/uploads/a01ea4b0123490b13a0578f003e920e1/myprofile.png)'
 

  /api/shop:
    get:
      operationId: R201
      summary: 'R201: Search Products API'
      description: 'Searches for products and returns the results as JSON. Access: VIS.'

      tags: 
        - 'M02: Shop'

      parameters:
        - in: query
          name: query
          description: String to use for full-text search
          schema:
            type: string
          required: false
        - in: query
          name: name
          description: Name of the item
          schema:
            type: string
          required: false
        - in: query
          name: type
          description: Type of the item
          schema:
            type: string
          required: false
        - in: query
          name: artist
          description: Name of the artist / band
          schema:
            type: string
          required: false
        - in: query
          name: year
          description: Year of the release
          schema:
            type: integer
          required: false
        - in: query
          name: genre
          description: Genre of the item
          schema:
            type: string
          required: false
        - in: query
          name: brand
          description: Brand of the item
          schema:
            type: string
          required: false
        - in: query
          name: model
          description: Model of the item
          schema:
            type: string
          required: false
        - in: query
          name: classification
          description: Integer corresponding to the work classification
          schema:
            type: integer
          required: false

      responses:
        '200':
          description: Success
          content:
            application/json:
              schema:
                type: array
                items:
                  type: album
                  properties:
                    id:
                      type: string
                    name:
                      type: string
                    genre:
                      type: string
                    year:
                      type: string
                    artist:
                      type: string
                    type:
                      type: string
                example:
                  - id: 1
                    name: Ed Sheeran - X
                    genre: Pop/Rock
                    year: 2014
                    artist: Ed Sheeran
                    type: Vinyl
                    properties:
                      id:
                        type: string
                      name:
                        type: string
                      brand:
                        type: string
                      category:
                        type: string
                      model:
                        type: string
```

---


## A8: Vertical prototype

This artifact representes the vertical prototype of DiscoTech, which includes three user stories whose purpose is to validate our project architecture.

We've used the LBAW framework, namely the Laravel framework, to develop this part of the project.

The following sections include the list of implemented user stories, the web resources implemented, the credentials to access an admin and a client account and the link to the prototype.

### 1. Implemented Features

#### 1.1. Implemented User Stories

This section includes the user stories that were implemented in the prototype.  

|Reference|Name|Priority|Description|
|-|-|-|-|
|USU01|Catalog|High|As an User, I want to navigate in the catalog of products so that I can see all the available products to buy.|
|USU03|Logout|High|As an User, I want to end my session so that I can protect it and, eventually, login in another one.|
|USV01|Login|High|As a Visitor, I want to login in the online shop so that I can have access to all the features a Client has.|
|USU04|Shop basket|High|As an User, I want to add new products to my shop basket so that I can buy them later on.|

#### 1.2. Implemented Web Resources

This section includes the web resources that were implemented in the prototype.  

**Module M01: Authentication and Profile**

| Web Resource Reference | URL                            |
| ---------------------- | ------------------------------ |
| R101: Login Form       | [/login](http://lbaw2126.lbaw-prod.fe.up.pt/login) |
| R102: Login Action     | POST /login |
| R103: Logout Action    | POST /logout |

**Module M02: Shop**

| Web Resource Reference | URL                            |
| ---------------------- | ------------------------------ |
| R201: Shopping Basket  | from [/homepage](http://lbaw2126.lbaw-prod.fe.up.pt/homepage) or [/catalog](http://lbaw2126.lbaw-prod.fe.up.pt/catalog)  |

**Module M05: Static Pages**

| Web Resource Reference | URL                            |
| ---------------------- | ------------------------------ |
| R501: About Us         | [/aboutus](http://lbaw2126.lbaw-prod.fe.up.pt/aboutus) |


### 2. Prototype

The prototype is available at http://lbaw2126.lbaw-prod.fe.up.pt/homepage

The prototype source code is available at https://git.fe.up.pt/lbaw/lbaw2021/lbaw2126