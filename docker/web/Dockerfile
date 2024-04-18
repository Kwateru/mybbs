FROM centos:centos7

# yumのアップデート
RUN yum -y update
RUN yum -y install yum-utils
RUN yum clean all

# httpd, vim, firewalldのインストール
RUN yum -y install httpd 
# RUN yum -y install vim 
RUN yum -y install firewalld 

# EPELリポジトリの追加
RUN yum -y install epel-release

# 開発ツールのインストール
# RUN yum -y groupinstall "Development Tools"
RUN yum -y install wget git vim curl
RUN yum -y install crontabs zip unzip

# remiリポジトリのインストール
RUN wget http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
RUN rpm -Uvh remi-release-7*.rpm
RUN yum-config-manager --enable remi-php74

# PHP 7のインストール
RUN \
    yum -y install \
    php php-common \
    php-mbstring \
    php-mcrypt \
    php-devel \
    php-xml \
    php-mysqlnd \
    php-pdo \
    php-gd \
    php-zip \
    php-opcache --nogpgcheck \
    php-bcmath \
    php-xdebug

COPY custom-php.ini /etc/php.ini

WORKDIR /var/www/html

# Composerのインストール
RUN curl -sS https://getcomposer.org/installer | php && \
mv composer.phar /usr/local/bin/composer

# Nodeのインストール
RUN yum -y install nodejs npm

# mhsendmailのインストール
RUN curl -sSL https://github.com/mailhog/mhsendmail/releases/download/v0.2.0/mhsendmail_linux_amd64 -o mhsendmail && \
    chmod +x mhsendmail && \
    mv mhsendmail /usr/local/bin/mhsendmail

# タイムゾーン設定
RUN cp /etc/localtime /etc/localtime.org
RUN ln -sf /usr/share/zoneinfo/Asia/Tokyo /etc/localtime

CMD ["/usr/sbin/httpd", "-D", "FOREGROUND"]

