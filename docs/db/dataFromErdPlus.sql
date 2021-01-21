CREATE TABLE role
(
  roleId INT NOT NULL,
  roleName VARCHAR(200) NOT NULL,
  notes VARCHAR(300) NOT NULL,
  PRIMARY KEY (roleId)
);

CREATE TABLE productCategory
(
  categoryId INT NOT NULL,
  categoryName VARCHAR(100) NOT NULL,
  notes VARCHAR(200) NOT NULL,
  PRIMARY KEY (categoryId)
);

CREATE TABLE user
(
  userId INT NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL,
  firstName VARCHAR(200) NOT NULL,
  lastName VARCHAR(200) NOT NULL,
  phone VARCHAR(30) NOT NULL,
  address VARCHAR(200) NOT NULL,
  roleId INT NOT NULL,
  PRIMARY KEY (userId),
  FOREIGN KEY (roleId) REFERENCES role(roleId)
);

CREATE TABLE product
(
  productId INT NOT NULL,
  productName VARCHAR(100) NOT NULL,
  price VARCHAR(100) NOT NULL,
  notes VARCHAR(300) NOT NULL,
  stock INT NOT NULL,
  status INT NOT NULL,
  discount INT NOT NULL,
  bestSeller INT NOT NULL,
  categoryId INT NOT NULL,
  PRIMARY KEY (productId),
  FOREIGN KEY (categoryId) REFERENCES productCategory(categoryId)
);

CREATE TABLE checkout
(
  checkoutId INT NOT NULL,
  date VARCHAR(200) NOT NULL,
  subtotal INT NOT NULL,
  courierPrice INT NOT NULL,
  notes VARCHAR(300) NOT NULL,
  sentToAddress VARCHAR(300) NOT NULL,
  userId INT NOT NULL,
  PRIMARY KEY (checkoutId),
  FOREIGN KEY (userId) REFERENCES user(userId)
);

CREATE TABLE checkoutTransaction
(
  transactionId INT NOT NULL,
  productId INT NOT NULL,
  checkoutId INT NOT NULL,
  PRIMARY KEY (transactionId),
  FOREIGN KEY (productId) REFERENCES product(productId),
  FOREIGN KEY (checkoutId) REFERENCES checkout(checkoutId)
);

CREATE TABLE promotion
(
  promotionId INT NOT NULL,
  tagline VARCHAR(300) NOT NULL,
  notes VARCHAR(300) NOT NULL,
  productId INT NOT NULL,
  PRIMARY KEY (promotionId),
  FOREIGN KEY (productId) REFERENCES product(productId)
);

CREATE TABLE payment
(
  paymentId INT NOT NULL,
  proof VARCHAR(300) NOT NULL,
  paymentDate VARCHAR(300) NOT NULL,
  notesFrombuyer VARCHAR(400) NOT NULL,
  checkoutId INT NOT NULL,
  userId INT NOT NULL,
  PRIMARY KEY (paymentId),
  FOREIGN KEY (checkoutId) REFERENCES checkout(checkoutId),
  FOREIGN KEY (userId) REFERENCES user(userId)
);
