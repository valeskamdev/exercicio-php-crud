# Criação BD

```sql
CREATE DATABASE crud_escola_valeska CHARACTER SET utf8mb4;

CREATE TABLE alunos
(
    id            INT           NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome          VARCHAR(30)   NOT NULL,
    nota_1 DECIMAL(4, 2) NOT NULL,
    nota_2  DECIMAL(4, 2) NOT NULL
);
```