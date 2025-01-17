# Documentation for "_Kasongo Must Go_"

[DKTJONATHAN](https://github.com/DKTJONATHAN/Ruto-Must-Go), started the "Kaongo Must Go" project, but needed aid in developing the ack end structures. Herein is my chipping in to make it a success.

I Used PHP/Laravel (v 11.5) to develop the back end. Please feel free to fork, extend, and use as you will deem it fit.

# Conceptual Framework

## Database: Tables.

- [x] Responsibilities table.
- [x] Users table.
- [x] Posts table.
- [x] Categories table.
- [ ] Comments table.

## Defining Relationships.

- [ ] A **responsibility** has one or many **users.**
- [ ] A **user** belongs to a **responsibility.**
- [ ] A **user** has one or many **posts.**
- [ ] A **user** has one or many **comment.**
- [ ] A **post** belongs to a **user.**
- [ ] A **category** has one or many **posts.**
- [ ] A **post** belongs to a **category.**
- [ ] A **post** has one or many **comments.**
- [ ] A **comment** belongs to a **post.**
- [ ] A **comment** belongs to a **user.**

# Admin Panel controls and views.
