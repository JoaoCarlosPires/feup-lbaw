# ER: Requirements Specification Component

### Project vision

An Online Shop where you can increase your musical collection, buying discs and instruments, in an easy, accessible, safe and customizable way.

## A1: Online Shop
  
### Goals, business context and environment

Our goal is to develop a system based on a web interface, allowing the operation of an online shop selling discs and diverse music related items. The items are listed by the owner and should be available for purchase by the general public. 

### Motivation

Due to the exponencial growth of the online music industry, the amount of physical music related items has been decreasing significantly, favoring platforms like Youtube or Spotify. As such, the main goal of our online store is to contradict this trend, promoting a healthy and sustainable commerce, welcoming those that want to increase their physical collection.
 
### Main features and user profiles

In order to provide a good experience, the online store should be intuitive and simple, as well as favor the access to all the features when its mobile version is being used. 

The purchase of a product implies the creation of a new purchase process. This process should contain the following steps: selection of product(s), payment through one of the options, tracking of the delivery status and an eventual refund. 

For sorting purposes, the products must be organized by categories (instruments, vinyl, accessories...). It is possible to access a product through a text search by typing its name (entirely or partially), the artist/band, brand (according to the item in question), price, average rating (defined by the customers ratings for the product) and release date (for discs). 

There are two types of users: Registered users and Administrators. 

The registered users (clients) will have the oportunity to share their opinions on a specific item. This can be done through a comment as well as a rating on a pre-determined scale (0-5). Each user can choose their favorite artists and track all the items present in their collection (inventory), as well as those they can still acquire (wishlist). Each user will have a personal page, where they will be able to alter their preferences, informations and track their purchases. 
 

The store administrators will have access to several features allowing them to manage the store. They will be able to manage users, products and stock. User managing will allow admins to filter improper comments and delete accounts violating the store norms. The product and stock management allows them to manually change the quantity of each item (updated automatically after every purchase) as well as adding or removing them. These users have the possibility to manually accept payments done over bank transfer.  


Sign in and Sign up must be available at all times, in order to allow non-registered users to create and modify an account and letting them to access all of the websites features. 

---


## A2: Actors e User Stories

This document behaves as a definition of all the characteristics of the online shop that sells discs and musical instruments, allowing it to support its implementation afterwards.

### 1. Actors

![UserDiagram](uploads/79c4e650e936b060f971aa6ddcee1528/UserDiagram.png)
*Picture 1: User Diagram*

| Identifier | Description | Example |
|---|---|---|
| User | Common usser with access to the catalog with all the available products. | n/a |
| Visitor | Not registered user that can create an account or login if it has already one. | n/a |
| Client | Registered user that can buy and rate products and also manage his own profile and preferences. | tiagoboldt |
| Administrator |  Special users with access to website administration features. | admin |


### 2. User Stories

#### 2.1. User

| Identifier | Name | Priority | Description |
|---|---|---|---|
| USU01 | Catalog | High | As an User, I want to navigate in the catalog of products so that I can see all the available products to buy. |
| USU02 | Category search | High | As an User, I want to search the products by category so that I can visualize all the ones that share some kind of type (discs, musical instruments, etc.) |
| USU03 | Advanced search | High | As an User, I want to search for products using a set of predefined filters so that I can visualize all the ones that have those qualities. |
| USU04 | Shop basket | High | As an User, I want to add new products to my shop basket so that I can buy them later on. |
| USU03 | Logout | High | As an User, I want to end my session so that I can protect it and, eventually, login in another one. |

#### 2.2. Visitor

| Identifier | Name | Priority | Description |
|---|---|---|---|
| USV01 | Login | High | As a Visitor, I want to login in the online shop so that I can have access to all the features a Client has. |
| USV02 | Signup | High | As a Visitor, I want to register myself so that I have a new account able to let me login. |

#### 2.3. Client

| Identifier | Name | Priority | Description |
|---|---|---|---|
| USC01 | Buy a product | High | As a Client, I want to buy the products I have in the shop basket so that I can increase my musical collection. |
| USC02 | Follow an order | High | As a Client, I want to follow an order so that I know when it will arrive. |
| USC03 | Account management | High | As a Client, I want to visualize, edit or delete my profile, mainly the e-mail and password I use to login so that I can keep my information updated. |
| USC04 | Rate a product | Medium | As a Client, I want to rate one or more products that I already bought so that I can contribute to the rate average of that product, available to all users. |
| USC05 | Purchases history | Medium | As a Client, I want all the products I buy to be automatically added to a purchase history so that I can see all my purchases in just one place. |
| USC06 | Wishlist | Low | As a Client, I want to add any product to any wishlist created by me so that I can have a list of products I wish to buy in the near future. |
| USC07 | Inventory | Low | As a Client, I want to add any product I already have (bought or not at the online shop) to an inventory created by me so that I can have a list of my products. |
| USC08 | Preferences | Low | As a Client, I want to choose my preferences, namely my favourite brands and artists, so that I can be recommended at the homepage to buy new products that match those preferences. |
| USC09 | Automatic payment | Low | As a Client, I want to pay one or more products through an automatic payment gateway so that I can receive my order faster and without the need to wait for the manual payment confirmation. |

#### 2.4. Administrator

| Identifier | Name | Priority | Description |
|---|---|---|---|
| USA01 | Manage products | High | As an Administrator, I want to see, add, remove or update the products of my online shop so that I can keep it updated. |
| USA02 | Manage users | High | As an Administrator, I want to alert or remove an user that doesn't follow the rules of the online shop so that I can keep the good environment and purpose of it. |
| USA03 | Manage ratings | Medium | As an Administrator, I want to manage all the comments made for some product so that I can avoid to have in my online shop messages that do not respect the others. |
| USA04 | Manual payments | Medium | As an Administrator, I want to manually validate all the payments made by money transfer so that I can send the waiting orders to their clients. |

### 3. Supplementary Requirements

This annex includes the business rules, the technical requirements and the restrictions.

#### 3.1. Business rules

A business rule defines or restricts an aspect of the business with the intention of clarify the business structure or its behaviour.

| Identifier | Name | Description |
|---|---|---|
| BR01 | User ratings | An User should be registered to be able to rate a product. |
| BR02 | Stock | The stock of a product should be verified and shown every time the respective page is visited. |
| BR03 | Average rating | The average rating of a product should be an average of all the submitted ratings by each user (on a scale of 0 to 5). |
| BR04 | Administrators | The administrators should have all the permissions to be able to manage all the products. |
| BR05 | Arriving date | The arriving date of an order should be later than its aquisition. |
| BR06 | Return date | The return of an order should be later than its arriving. |
| BR07 | Deleted user | Everytime an account is deleted by an administrator, all the data and information of that account should be deleted too, including ratings and comments. |
| BR08 | Logout | The logout should only be allowed when an user is logged in. | 

#### 3.2. Technical requirements

The technical requirements are the group of technical aspects the system should follow, as well as all the performance, reliability and responsibility issues.

| Identifier | Name | Description |
|---|---|---|
| TR01 | Availability | The online shop should be available 24 hours a day, 7 days a week. |
| TR02 | Acessibility | The online shop should be accessible to any user, independently of any physical or mental incapacity or limitation and regardless of the browser or device used. |
| TR03 | Usability | The online shop should be simple and easy to use. |
| TR04 | Performance | The online shop should have minimum response times to keep user's attention. |
| TR05 | Web App | The online shop should be implemented as a web app with dynamic webpages and using the following technologies: HTML, JavaScript, CSS and Bootstrap. |
| TR06 | Portability | The online shop server should be functionaly independent of the operating system used (Linux, Mac OS, Windows, Android, iOS). |
| TR07 | Database | The PostgreSQL database system should be used. |
| TR08 | Security | The online shop should protect the information from non-authorized access by using authentication mechanisms and a verification system. |
| TR09 | Robustness | The online shop should keep its normal behaviour ever when runtime errors occur. |
| TR10 | Scalability | The online shop should be prepared to deal with an increase of the number of users and the use they make. |
| TR11 | Ethics | The online shop should respect the ethical principles of software development like password and payments encryption and the identity of the administrators. |

#### 3.3. Restrictions

A restriction on the design limits the level of freedom in the search for a solution. 

| Identifier | Name | Description |
|---|---|---|
| R01 | Deadline | The online shop and its features should be functional by the end of this semester. |  

---

## A3: User Interface Prototype

This user interfaces prototype is intended to help to identify and describe the user requirements, give an overview of what's expected from the user interface of the online shop and to see the evolution through a set of iterations of the user interface design.

This artefact includes an overview of the interface elements and the main features (the ones shared by almost all the pages), an overview of the information architecture as seen by the users (sitemap) and the
identification and description of the main interactions with the system, shown as sequences of screens (wireflows).

By the end of this artifact, there's a section with the interface's descriptions.

### 1. Interface and common features

DiscoTech is an online shop built using HTML, PHP, JavaScript and CSS. The user interface was implemented using the Bootstrap framework.

| [![homepage_numbers](uploads/7fce0dfefe9fdf7d3a3f9ad431566efa/homepage_numbers.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/index.php)  | [![homepage_numbers_mobile](uploads/c26d516b08e02f328790d6d3a8d203bd/homepage_numbers_mobile.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/index.php) | 
|:---:|:---:|
| Desktop | Mobile |

*Picture 2: Website Common Elements*

1. Logo
2. Navigation menu
3. Search bar
4. Content
4. Footer

This figure presents some characteristics common to all the pages like the header with the logo, the navigation menu and the search bar, the content of the page and the footer. All this elements mantain their position in all pages so that the user can quickly adapt to the website navigation.

We used a simple layout approach to allow the user to navigate easily through our online shop. We also made sure that our pages are intuitive enough to allow all the users to access all the features available.

### 2. Sitemap

The following picture shows our sitemap. It's possible to see the relationships between all the pages in our online shop and the group where each one fits in. By doing so, we make sure that later on will be easier to build our website considering all the hierarchy between pages.

![Sitemap](uploads/b46bc89bc54e4fab047477b87801c8f5/Sitemap.png)
*Picture 3: Sitemap*

### 3. Wireflows

![overview](uploads/ef6e5e4ef2522b8bd0a198c1dfb7b297/overview.jpg)
*Picture 4: InVision Overview*

<em>Note: Due to the file size limit, we couldn't upload an overview with better quality</em>

The following pictures highlight the main use cases of our system. 

In the first one, we can see the difference between the Homepage without a logged in user and, after the successful login, the Homepage with the suggestions. Then, the user goes to the New Return screen to submit a return of a product.

![Wireflow_1](uploads/73aaa3feb780000a4495c0680c01da50/Wireflow_1.png)
*Picture 5: First Wireflow*

In the second one, considering the login done, the user goes to the catalog, then visits a product page and add that product to the basket (and repeat the last two steps two more times). Then, confirms the purchase by going to the basket and, finally, can see the order status in the Track Order screen.

![Wireflow_2](uploads/bd69abe6dc464030be19443fff2db543/Wireflow_2.png)
*Picture 6: Second Wireflow*

In the third one, considering the user is not logged in, the user goes first to the product page and tries to add a review, but we can't do that as he's not logged in, so is asked to login before he can do so. Then, after a successful login, the user can comment the product and view all the reviews.

![Wireflow_3](uploads/9532f4fce6adbdda0c15edab086b0126/Wireflow_3.png)
*Picture 7: Third Wireflow*

In the fourth and last one, the user this time has an admin account and, after a successful login, deletes an user and changes from Manage Users to Manual Payments screen to see those payments that require his attention.

![Wireflow_4](uploads/a2c56a7b9ceb70775c6ce9b1919b298f/Wireflow_4.png)
*Picture 8: Fourth Wireflow*

Our InVision project is available at [InVision - lbaw2126](https://projects.invisionapp.com/freehand/document/DuUGaGPna? "InVision - lbaw2126")

### 4. Interfaces

In this section, each page is presented with a screenshot and a link to access it.

Our Online Shop has the following pages:

- Homepage (with different views according to the session status - logged in or not)
- About Us
- Page Not Found
- Shopping Basket (side menu)
- Login
- Signup
- My Profile (with multiple tabs)
- Catalog
- Single Product
- Add Review
- Checkout
- Track order
- Administration (with multiple tabs)

#### UI00: Homepage

| [![homepage-login](uploads/4ada8b8d2b089147dea55b88f2a1e856/homepage-login.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/homepage-login.php)  | [![mobile_homepage-login](uploads/a9ed2a28c0ddcba61fe851033e080a10/mobile_homepage-login.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/homepage-login.php) | 
|:---:|:---:|
| Desktop | Mobile |

*Picture 9: Homepage w/ Login made* :earth_africa: [Homepage w/ Login](http://lbaw2126-piu.lbaw-prod.fe.up.pt/homepage-login.php "Homepage w/ Login")

| [![homepage](uploads/018b2e785f4d5df1f055930ec66d4e75/homepage.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/index.php)  | [![mobile_homepage](uploads/f88a70682d3b80bb218d253bb47c3ea2/mobile_homepage.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/index.php) | 
|:---:|:---:|
| Desktop | Mobile |

*Picture 10: Homepage w/o Login made* :earth_africa: [Homepage w/o Login](http://lbaw2126-piu.lbaw-prod.fe.up.pt/homepage-login.php "Homepage w/o Login")

#### UI01: About Us

| [![aboutus](uploads/5fce68ed269f848fb30cbb5451e99318/aboutus.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/aboutus.php)  | [![mobile_aboutus](uploads/3d427bb88d6d6bdcf1235b9e4b91a15b/mobile_aboutus.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/aboutus.php) | 
|:---:|:---:|
| Desktop | Mobile |

*Picture 11: About Us* :earth_africa: [About Us](http://lbaw2126-piu.lbaw-prod.fe.up.pt/aboutus.php "About Us")

#### UI02: Page not found

| [![error](uploads/5d8bf8dee4ad6c3de2b01cd482f92b8f/error.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/error.php)  | [![mobile_error](uploads/3e5f64027131bbc31ac91c3899f93252/mobile_error.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/error.php) | 
|:---:|:---:|
| Desktop | Mobile |

*Picture 12: Error* :earth_africa: [Error](http://lbaw2126-piu.lbaw-prod.fe.up.pt/error.php "Error")

#### UI03: Shopping Basket

| [![basket](uploads/7a720c3e33e0925f7a66839c470440c5/basket.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/index.php)  | [![mobile_basket](uploads/4ff564ce1599be00f30c81c6a1ee8c58/mobile_basket.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/index.php) | 
|:---:|:---:|
| Desktop | Mobile |

*Picture 13: Shopping Basket* :earth_africa: [Shopping Basket](http://lbaw2126-piu.lbaw-prod.fe.up.pt/index.php "Shopping Basket")

#### UI04: Login

| [![login](uploads/18abc901df0ce17f7c8b3ac5e321044b/login.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/login.php)  | [![mobile_login](uploads/4668e63c24bd53d3c727b229ffb3252f/mobile_login.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/login.php) | 
|:---:|:---:|
| Desktop | Mobile |

*Picture 14: Login* :earth_africa: [Login](http://lbaw2126-piu.lbaw-prod.fe.up.pt/login.php "Login")

#### UI05: Signup

| [![signup](uploads/9c6c30164d417634a36f5d6063d0c495/signup.jpg)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/signup.php)  | [![mobile_signup](uploads/1e55e38e73b612154e1820dcfcffc66a/mobile_signup.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/signup.php) | 
|:---:|:---:|
| Desktop | Mobile |

*Picture 15: Signup* :earth_africa: [Signup](http://lbaw2126-piu.lbaw-prod.fe.up.pt/signup.php "Signup")

#### UI06: My Profile

| [![myprofile](uploads/a01ea4b0123490b13a0578f003e920e1/myprofile.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/myprofile.php)  | [![mobile_myprofile](uploads/cb180914769d0162947a1ff906d45c8e/mobile_myprofile.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/myprofile.php) | 
|:---:|:---:|
| Desktop | Mobile |

*Picture 16: My Profile* :earth_africa: [My Profile](http://lbaw2126-piu.lbaw-prod.fe.up.pt/myprofile.php "My Profile")

| [![preferences](uploads/c40e2d2da1a30949cd382e90acbb6319/preferences.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/preferences.php)  | [![mobile_preferences](uploads/c3d30d8d334a60aeceb1b8d4c51c1936/mobile_preferences.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/preferences.php) | 
|:---:|:---:|
| Desktop | Mobile |

*Picture 17: Preferences* :earth_africa: [Preferences](http://lbaw2126-piu.lbaw-prod.fe.up.pt/preferences.php "Preferences")

| [![accountdata](uploads/b75359129600f5f243bdffe5a054d33b/accountdata.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/accountdata.php)  | [![mobile_accountdata](uploads/6845c0dc92ee77b06a44d5e19b01d27c/mobile_accountdata.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/accountdata.php) | 
|:---:|:---:|
| Desktop | Mobile |

*Picture 18: Account Data* :earth_africa: [Account Data](http://lbaw2126-piu.lbaw-prod.fe.up.pt/account_data.php "Account Data")

| [![160944355_2921124644835658_791920210828531305_n](uploads/46b7a372ba9fc7ec78ecc21845811418/160944355_2921124644835658_791920210828531305_n.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/myprofile_payment_method.php)  | [![mobile_userpayment](uploads/b1b57df48d08079fe9605741bfaf1bfe/mobile_userpayment.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/myprofile_payment_method.php) | 
|:---:|:---:|
| Desktop | Mobile |

*Picture 19: Payment Method* :earth_africa: [Payment Method](http://lbaw2126-piu.lbaw-prod.fe.up.pt/myprofile_payment_method.php "Payment Method")

| [![161332013_274645477517487_6650356241355291862_n](uploads/9ceae746a5c453f2ae72a2eb93241240/161332013_274645477517487_6650356241355291862_n.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/myprofile_inventory.php)  | [![mobile_inventory](uploads/de6f09c0f11ab7c3165233a92a3e065c/mobile_inventory.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/myprofile_inventory.php) | 
|:---:|:---:|
| Desktop | Mobile |

*Picture 20: Inventory* :earth_africa: [Inventory](http://lbaw2126-piu.lbaw-prod.fe.up.pt/myprofile_inventory.php "Inventory")

| [![myorders](uploads/b758218e8aab2e8482160fdd2be115bc/myorders.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/myorders.php)  | [![mobile_myorders](uploads/b04e116c1a519260a5840315f9db5dd1/mobile_myorders.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/myorders.php) | 
|:---:|:---:|
| Desktop | Mobile |

*Picture 21: My Orders* :earth_africa: [My Orders](http://lbaw2126-piu.lbaw-prod.fe.up.pt/myorders.php "My Orders")

| [![160886130_771036683532958_7168321170852934925_n](uploads/9eb4ae76f84355740e4b603324148675/160886130_771036683532958_7168321170852934925_n.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/myprofile_new_return.php)  | [![mobile_newreturn](uploads/46b20da161a3d84944d93d73b7b02c74/mobile_newreturn.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/myprofile_new_return.php) | 
|:---:|:---:|
| Desktop | Mobile |

*Picture 22: New Return* :earth_africa: [New Return](http://lbaw2126-piu.lbaw-prod.fe.up.pt/myprofile_new_return.php "New Return")

#### UI07: Catalog

| [![catalog](uploads/98b935df59a66dad4a71468d22375c04/catalog.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/catalog.php  )  | [![mobile_catalog](uploads/43b6841a026dc3d441eecaa3ac4fdcba/mobile_catalog.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/catalog.php  ) | 
|:---:|:---:|
| Desktop | Mobile |

*Picture 23: Catalog* :earth_africa: [Catalog](http://lbaw2126-piu.lbaw-prod.fe.up.pt/catalog.php "Catalog")

#### UI08: Product

| [![product](uploads/0df4c9c6a96437f620e6ab0aa6f3fe19/product.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/product.php )  | [![mobile_product](uploads/f48c7622e34e3a3fa838d84cbadfdd95/mobile_product.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/product.php ) | 
|:---:|:---:|
| Desktop | Mobile |

*Picture 24: Product* :earth_africa: [Product](http://lbaw2126-piu.lbaw-prod.fe.up.pt/product.php "Product")

#### UI09: Add Review

| [![review](uploads/2cb64ea764bc8082525f188b9f00c7fc/review.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/reviews.php)  | [![mobile_review](uploads/90467a0295344632bd2a511c52fd4eba/mobile_review.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/reviews.php) | 
|:---:|:---:|
| Desktop | Mobile |

*Picture 25: Add Review* :earth_africa: [Add Review](http://lbaw2126-piu.lbaw-prod.fe.up.pt/reviews.php "Add Review")

#### UI10: Checkout

| [![checkout](uploads/81494b064b3348c1826b89a093f1b5ea/checkout.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/checkout.php)  | [![mobile_checkout](uploads/a76395bf051cd10dce4732e10a85f5cd/mobile_checkout.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/checkout.php) | 
|:---:|:---:|
| Desktop | Mobile |

*Picture 25: Checkout* :earth_africa: [Checkout](http://lbaw2126-piu.lbaw-prod.fe.up.pt/checkout.php "Checkout")

#### UI11: Track Order

| [![track-order](uploads/858108c7eb9b9236cc29516fc99c253b/track-order.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/track-order.php)  | [![mobile_trackorder](uploads/81ab13366645b3e114099039d2f5ee38/mobile_trackorder.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/track-order.php) | 
|:---:|:---:|
| Desktop | Mobile |

*Picture 26: Track Order* :earth_africa: [Track Order](http://lbaw2126-piu.lbaw-prod.fe.up.pt/track-order.php "Track Order")

#### UI12: Admin

| [![adminmanageproducts](uploads/5b204c685e11611c70a589d76803333e/adminmanageproducts.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/admin_manage_products.php)  | [![mobile_adminproducts](uploads/ea31c34c0638ecbfb2f1da715ea65369/mobile_adminproducts.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/admin_manage_products.php) | 
|:---:|:---:|
| Desktop | Mobile |

*Picture 27: Administration - Manage Products* :earth_africa: [Admin Manage Products](http://lbaw2126-piu.lbaw-prod.fe.up.pt/admin_manage_products.php "Admin Manage Products")

| [![adminmanageratings](uploads/7df1cac8fc1fd283912cbcd5f51d4a00/adminmanageratings.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/admin_manage_ratings.php)  | [![mobile_adminratings](uploads/9a40abb834bdb28f77cf6e5e88827246/mobile_adminratings.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/admin_manage_ratings.php) | 
|:---:|:---:|
| Desktop | Mobile |

*Picture 28: Administration - Manage Ratings* :earth_africa: [Admin Manage Ratings](http://lbaw2126-piu.lbaw-prod.fe.up.pt/admin_manage_ratings.php "Admin Manage Ratings")

| [![adminmanageusers](uploads/5d963ad0b5cce77a7fd9e9d29c03464e/adminmanageusers.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/admin_manage_users.php)  | [![mobile_adminusers](uploads/fce1c98b6ec4d93caa28a18eb58beeb9/mobile_adminusers.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/admin_manage_users.php) | 
|:---:|:---:|
| Desktop | Mobile |

*Picture 29: Administration - Manage Users* :earth_africa: [Admin Manage Users](http://lbaw2126-piu.lbaw-prod.fe.up.pt/admin_manage_users.php "Admin Manage Users")

| [![adminmanualpayments](uploads/8effa8ddcd8037b26a53edccfc29bb68/adminmanualpayments.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/admin_manual_payments.php)  | [![mobile_adminpayments](uploads/98d09f9f4a0c5e0bd66fa314c186fa95/mobile_adminpayments.png)](http://lbaw2126-piu.lbaw-prod.fe.up.pt/admin_manual_payments.php) | 
|:---:|:---:|
| Desktop | Mobile |

*Picture 30: Administration - Manual Payments* :earth_africa: [Admin Manual Payments](http://lbaw2126-piu.lbaw-prod.fe.up.pt/admin_manual_payments.php "Admin Manual Payments")