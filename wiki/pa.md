# PA: Product and Presentation

An Online Shop where you can increase your musical collection, buying discs and instruments, in an easy, accessible, safe and customizable way.

## A9: Product

This artifact contains the installation and usage of our online shop, the application help, the input, HTML and CSS validation, the accessibility and usability and the implementation carried on, which includes the libraries used and the user stories implemented.

DiscoTech is an online music shop where clients from all arround the world can buy discs, instruments and other accessories. It was made using the Laravel framework, using HTML, CSS, PHP, Bootstrap and PostgreSQL.

### 1. Installation

Link to the [release](https://git.fe.up.pt/lbaw/lbaw2021/lbaw2126/-/tags/PA) with the final version of the source code.

### 2. Usage

To access the online shop at the production machine, access the following link: [DiscoTech](http://lbaw2126.lbaw-prod.fe.up.pt). 

### 3. Application Help

The help at DiscoTech can be found under the pages FAQ, Contacts and About Us, which are not really a guide to work with the online shop, but are three pages that have more information about DiscoTech. We didn't implement a guide page as we made the online shop intuitive enough to not need it.

The About Us page can be found at [DiscoTech About Us](http://lbaw2126.lbaw-prod.fe.up.pt/aboutus).

The FAQ page can be found at [DiscoTech FAQ](http://lbaw2126.lbaw-prod.fe.up.pt/faq).

The Contacts page can be found at [DiscoTech Contacts](http://lbaw2126.lbaw-prod.fe.up.pt/contacts).

### 4. Input Validation
 
The input data of our project was both validated using HTML validation and server-side validation.

The following example shows, first, the HTML validation and then the server-side validation.
 
```
(...)
<form method="post" action="admin_manage_products/addAlbum">
    {{ csrf_field()}}
(...)

(...)
<div class="mb-3">
   <label for="price" class="form-label">Price </label>
   <input type="number" class="form-control" min="0" max="1000" id="price" name="price">
</div>
(...)
```

```
(...)
if($request->input('name')==null or
            $request->input('type')==null or
            $request->input('description')==null or
            $request->input('tag')==null or
            $request->input('price')==null or
            $request->input('quantity')==null or
            $request->input('release_date')==null or
            $request->input('year')==null or
            $request->input('band')==null or
            $request->input('albumGenre')==null) {
            return redirect()->back()->with('alert', 'Please fill every space.');
} else {
(...)
```


### 5. Check Accessibility and Usability

The results of the accessibility test made at https://ux.sapo.pt/checklists/acessibilidade/ can be found at [Accessibility Test Results](https://git.fe.up.pt/lbaw/lbaw2021/lbaw2126/-/blob/Documents/doc/accessibility_checklist.pdf).

The results of the usability test made at https://ux.sapo.pt/checklists/usabilidade/ can be found at [Usability Test Results](https://git.fe.up.pt/lbaw/lbaw2021/lbaw2126/-/blob/Documents/doc/usability_checklist.pdf).

### 6. HTML & CSS Validation

The results of the HTML validation made at https://validator.w3.org/nu/ can be found at [HTML Validation Results](https://git.fe.up.pt/lbaw/lbaw2021/lbaw2126/-/blob/Documents/doc/html.pdf).

The results of the CSS validation made at https://jigsaw.w3.org/css-validator/ can be found at [CSS Validation Results](https://git.fe.up.pt/lbaw/lbaw2021/lbaw2126/-/blob/Documents/doc/css.pdf).

### 7. Revisions to the Project

The revisions made to the project since the requirements specification stage are the ones that follow:

- The following of an order was specified initally as of high importance. The fact is that we then saw that many famous websites actually don't have this or, the ones that have, don't have this as developed as we thought. That said, we changed the following of an order from high priority to low priority.
- To register, a user must now submit not only the username, e-mail and password (with a confirmation on this last one) but also the name.
- It is possible to sort the list of all users by name, username and email (ascending or descending).
- The search bar on the user management page accepts searches for client names but also email and username.
- An user is now allowed to delete its own account by accessing My Profile and selecting that option.
- The FAQ and Contacts pages were added.

### 8. Implementation Details

#### 8.1. Libraries Used

The frameworks used during the project were the Bootstrap and Laravel. No library was used.

#### 8.2 User Stories

The following table includes the list of implemented user stories in our project. 

| US Identifier | Module Name | Name | Priority | Team members | State  |
| - | - | - | - | - | - |
| USU01 | User | Catalog | Mandatory | **João Pires** | 100% |
| USU02 | User | Category search | Mandatory | **Monika Stepien**, Tomás Gonçalves | 100% |
| USU03 | User | Advanced search | Mandatory | **Monika Stepien** | 100% |
| USU04 | User | Shop basket | Mandatory | **Tomás Gonçalves** | 100% |
| USU05 | User | Logout | Mandatory | **João Pires** | 100% |
| USU06 | User | Product Page | Mandatory | **Monika Stepien** | 100% |
| USV01 | Visitor | Login | Mandatory | **João Pires** | 100% |
| USV02 | Visitor | Signup | Mandatory | **João Pires** | 100% |
| USV03 | Visitor | FAQ and Contacts | Optional | **João Pires** | 100% |
| USC01 | Client | Buy a product | Mandatory | **Monika Stepien** | 100% |
| USC03 | Client | Account management | Important | **Tomás Gonçalves** | 100% |
| USC04 | Client | Rate a product | Important | **Monika Stepien** | 100% |
| USC11 | Client | Checkout | Mandatory | **Tomás Gonçalves** | 100% |
| USA01 | Administrator | Manage products | Mandatory | **João Pires** | 100% |
| USA02 | Administrator | Manage users | Mandatory | **Tomás Gonçalves**| 100% |
| USA03 | Administrator | Manage ratings | Important | **João Pires** | 100% |
| USA04 | Administrator | Manual payments | Important | **João Pires** | 100% |

**Note:** The User Stories **Checkout**, **Product Page**, **About Us** and **FAQ and Contacts** were created during the project. While the **Checkout**, the **Product Page** and the **About Us** were already present in the A3: User Interface Prototype, the **FAQ and Contacts** pages and user story was only added by the end of the project.

---

## A10: Presentation
 
This artifact includes the product presentation.

### 1. Product presentation

Our product is an online music shop called DiscoTech. At DiscoTech, clients can buy discs, vinyls, instruments and accessories in an easy and accessible way. The catalog offers a wide range of available products, but the administrators can regularly add new products or remove/update existing ones. 

The purchase process is as simple as add all the wanted products to a shopping basket and then proceed to the checkout. The clients can also see each product details and give a review when logged in. The payments are made by bank transfer and confirmed by an admin, who can also manage users and those ratings. 

The URL to the product is available at [DiscoTech](http://lbaw21gg.lbaw-prod.fe.up.pt).
