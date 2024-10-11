use blog;

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    cover_image VARCHAR(255), -- Caminho para a imagem de capa
    slug VARCHAR(255) NOT NULL UNIQUE, -- URL amigável
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Data de criação
);

CREATE TABLE keywords (
    id INT AUTO_INCREMENT PRIMARY KEY,
    keyword VARCHAR(255) NOT NULL UNIQUE
);

CREATE TABLE posts_keywords (
    post_id INT,
    keyword_id INT,
    FOREIGN KEY (post_id) REFERENCES posts(id),
    FOREIGN KEY (keyword_id) REFERENCES keywords(id),
    PRIMARY KEY (post_id, keyword_id)
);
