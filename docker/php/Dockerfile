FROM php:8.3-fpm

# Instalar dependências essenciais
RUN apt-get update && apt-get install -y \
    gnupg2 curl libpng-dev libzip-dev zlib1g-dev unixodbc-dev g++ make autoconf pkg-config \
    libssl-dev libonig-dev libxml2-dev libicu-dev zip unzip \
    && rm -rf /var/lib/apt/lists/*

# Adicionar chave e repositório da Microsoft
RUN curl -fsSL https://packages.microsoft.com/keys/microsoft.asc | gpg --dearmor \
      -o /usr/share/keyrings/microsoft-prod.gpg \
    && echo "deb [signed-by=/usr/share/keyrings/microsoft-prod.gpg] https://packages.microsoft.com/debian/12/prod bookworm main" \
      > /etc/apt/sources.list.d/mssql-release.list

# Instalar ODBC Driver 18 e mssql-tools
RUN apt-get update && ACCEPT_EULA=Y apt-get install -y msodbcsql18 mssql-tools \
    && rm -rf /var/lib/apt/lists/*

# Adicionar mssql-tools ao PATH
ENV PATH="$PATH:/opt/mssql-tools/bin"

# Instalar extensões SQL Server (PDO e SQLSRV)
RUN pecl install sqlsrv pdo_sqlsrv \
    && docker-php-ext-enable sqlsrv pdo_sqlsrv

# Instalar extensões PHP comuns do CodeIgniter 4
RUN docker-php-ext-install gd zip intl bcmath opcache

# Copiar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Ajustar permissões para CodeIgniter (cache, logs, etc.)
RUN mkdir -p writable bootstrap/cache \
    && chown -R www-data:www-data writable bootstrap/cache \
    && chmod -R 775 writable bootstrap/cache

EXPOSE 9000
