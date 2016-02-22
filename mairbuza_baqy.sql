-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Dim 21 Février 2016 à 19:59
-- Version du serveur: 5.5.20
-- Version de PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `mairbuza_baqy`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualites`
--

CREATE TABLE IF NOT EXISTS `actualites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `dateAjout` datetime NOT NULL,
  `idCategorie` int(11) NOT NULL,
  `idAuteur` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `resume` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `actualites`
--

INSERT INTO `actualites` (`id`, `titre`, `contenu`, `dateAjout`, `idCategorie`, `idAuteur`, `image`, `resume`) VALUES
(2, 'Lorem ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in lectus sit amet eros laoreet cursus ac et mi. Vestibulum sit amet lectus scelerisque, elementum quam in, facilisis nunc. Sed id suscipit lacus, ac pretium neque. Aenean aliquet, turpis nec tempus pharetra, arcu libero consequat ex, nec posuere ante arcu eu erat. Sed molestie pulvinar diam eu dictum. Vivamus vel lorem dolor. Ut eget ultrices justo. Vivamus tempor nibh purus, eu commodo felis pellentesque vitae. Donec posuere dictum viverra. Donec tempus quis sem nec fermentum. Mauris eu nisl ut erat lacinia elementum at eget ex. Maecenas at tortor odio. Suspendisse aliquam mi eu orci fermentum, ac euismod lectus tincidunt. Etiam eu quam sollicitudin, convallis justo sit amet, porttitor enim. Maecenas quis accumsan neque. Aliquam fringilla mollis ante, vel lobortis diam ultrices eget.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in lectus sit amet eros laoreet cursus ac et mi. Vestibulum sit amet lectus scelerisque, elementum quam in, facilisis nunc. Sed id suscipit lacus, ac pretium neque. Aenean aliquet, turpis nec tempus pharetra, arcu libero consequat ex, nec posuere ante arcu eu erat. Sed molestie pulvinar diam eu dictum. Vivamus vel lorem dolor. Ut eget ultrices justo. Vivamus tempor nibh purus, eu commodo felis pellentesque vitae. Donec posuere dictum viverra. Donec tempus quis sem nec fermentum. Mauris eu nisl ut erat lacinia elementum at eget ex. Maecenas at tortor odio. Suspendisse aliquam mi eu orci fermentum, ac euismod lectus tincidunt. Etiam eu quam sollicitudin, convallis justo sit amet, porttitor enim. Maecenas quis accumsan neque. Aliquam fringilla mollis ante, vel lobortis diam ultrices eget.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in lectus sit amet eros laoreet cursus ac et mi. Vestibulum sit amet lectus scelerisque, elementum quam in, facilisis nunc. Sed id suscipit lacus, ac pretium neque. Aenean aliquet, turpis nec tempus pharetra, arcu libero consequat ex, nec posuere ante arcu eu erat. Sed molestie pulvinar diam eu dictum. Vivamus vel lorem dolor. Ut eget ultrices justo. Vivamus tempor nibh purus, eu commodo felis pellentesque vitae. Donec posuere dictum viverra. Donec tempus quis sem nec fermentum. Mauris eu nisl ut erat lacinia elementum at eget ex. Maecenas at tortor odio. Suspendisse aliquam mi eu orci fermentum, ac euismod lectus tincidunt. Etiam eu quam sollicitudin, convallis justo sit amet, porttitor enim. Maecenas quis accumsan neque. Aliquam fringilla mollis ante, vel lobortis diam ultrices eget.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in lectus sit amet eros laoreet cursus ac et mi. Vestibulum sit amet lectus scelerisque, elementum quam in, facilisis nunc. Sed id suscipit lacus, ac pretium neque. Aenean aliquet, turpis nec tempus pharetra, arcu libero consequat ex, nec posuere ante arcu eu erat. Sed molestie pulvinar diam eu dictum. Vivamus vel lorem dolor. Ut eget ultrices justo. Vivamus tempor nibh purus, eu commodo felis pellentesque vitae. Donec posuere dictum viverra. Donec tempus quis sem nec fermentum. Mauris eu nisl ut erat lacinia elementum at eget ex. Maecenas at tortor odio. Suspendisse aliquam mi eu orci fermentum, ac euismod lectus tincidunt. Etiam eu quam sollicitudin, convallis justo sit amet, porttitor enim. Maecenas quis accumsan neque. Aliquam fringilla mollis ante, vel lobortis diam ultrices eget.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in lectus sit amet eros laoreet cursus ac et mi. Vestibulum sit amet lectus scelerisque, elementum quam in, facilisis nunc. Sed id suscipit lacus, ac pretium neque. Aenean aliquet, turpis nec tempus pharetra, arcu libero consequat ex, nec posuere ante arcu eu erat. Sed molestie pulvinar diam eu dictum. Vivamus vel lorem dolor. Ut eget ultrices justo. Vivamus tempor nibh purus, eu commodo felis pellentesque vitae. Donec posuere dictum viverra. Donec tempus quis sem nec fermentum. Mauris eu nisl ut erat lacinia elementum at eget ex. Maecenas at tortor odio. Suspendisse aliquam mi eu orci fermentum, ac euismod lectus tincidunt. Etiam eu quam sollicitudin, convallis justo sit amet, porttitor enim. Maecenas quis accumsan neque. Aliquam fringilla mollis ante, vel lobortis diam ultrices eget.</p>\n', '2016-02-12 20:40:43', 57, 1, '56c8c13958518.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in lectus sit amet eros laoreet cursus ac et mi. Vestibulum sit amet lectus scelerisque, elementum quam in, facilisis nunc. Sed id suscipit lacus, ac pretium neque. Aenean aliquet, turpis nec tempus pharetra, arcu libero consequat ex, nec posuere ante arcu eu erat. Sed molestie pulvinar diam eu dictum. Vivamus vel lorem dolor. Ut eget ultrices justo. Vivamus tempor nibh purus, eu commodo felis pellentesque vitae. Donec posuere dictum viverra. Donec tempus quis sem nec fermentum. Mauris eu nisl ut erat lacinia elementum at eget ex. Maecenas at tortor odio. Suspendisse aliquam mi eu orci fermentum, ac euismod lectus tincidunt. Etiam eu quam sollicitudin, convallis justo sit amet, porttitor enim. Maecenas quis accumsan neque. Aliquam fringilla mollis ante, vel lobortis diam ultrices eget.'),
(3, 'Lorem Ipsum', '<p>Quisque laoreet tristique diam, sed imperdiet leo ultricies auctor. Praesent tristique enim at pharetra ullamcorper. Curabitur leo turpis, vestibulum eget nisi vel, egestas pulvinar metus. Sed sit amet tortor porttitor, imperdiet sem a, faucibus enim. Proin aliquam nisl augue, ac tincidunt diam lobortis id. Pellentesque euismod dapibus rutrum. Ut a orci ullamcorper, ornare dolor sit amet, tempor dui.</p>\n\n<p>Sed ultricies, urna vel commodo tincidunt, ligula tortor dictum sapien, vitae aliquet ante mi quis felis. Cras interdum lacus est, eu finibus tortor pulvinar fringilla. Duis a lorem vehicula, tincidunt tortor finibus, efficitur libero. Curabitur at leo efficitur, vulputate lorem ac, suscipit felis. Phasellus mollis orci et ultrices finibus. Phasellus id sollicitudin nisi. Integer tristique, purus porttitor imperdiet auctor, ex nulla tempus ipsum, quis ornare nunc odio nec dolor. Duis venenatis aliquam maximus. Pellentesque eget eros quis urna venenatis tincidunt. Integer et dapibus sapien. Vestibulum ut lobortis quam. Donec dapibus neque in tortor porta suscipit. Nunc faucibus efficitur diam in convallis. Phasellus ex lectus, fermentum a lorem non, varius sagittis ante. Praesent eget enim viverra lectus luctus eleifend.</p>\n\n<p>Maecenas tincidunt mattis nunc, quis bibendum arcu tempor at. Suspendisse quis tincidunt lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque augue odio, scelerisque eu nulla eget, vestibulum rutrum diam. Sed aliquet leo ut nisi pharetra, id dictum felis bibendum. Quisque ipsum erat, sagittis a gravida eu, gravida a metus. Nullam tempus quis erat non iaculis.</p>\n', '2016-02-20 20:41:05', 59, 1, '56c8c15168020.jpeg', 'Quisque laoreet tristique diam, sed imperdiet leo ultricies auctor. Praesent tristique enim at pharetra ullamcorper. Curabitur leo turpis, vestibulum eget nisi vel, egestas pulvinar metus. Sed sit amet tortor porttitor, imperdiet sem a, faucibus enim. Proin aliquam nisl augue, ac tincidunt diam lobortis id. Pellentesque euismod dapibus rutrum. Ut a orci ullamcorper, ornare dolor sit amet, tem'),
(4, 'Lorem Ipsum 3', '<p>Quisque laoreet tristique diam, sed imperdiet leo ultricies auctor. Praesent tristique enim at pharetra ullamcorper. Curabitur leo turpis, vestibulum eget nisi vel, egestas pulvinar metus. Sed sit amet tortor porttitor, imperdiet sem a, faucibus enim. Proin aliquam nisl augue, ac tincidunt diam lobortis id. Pellentesque euismod dapibus rutrum. Ut a orci ullamcorper, ornare dolor sit amet, tempor dui.</p>\n\n<p>Sed ultricies, urna vel commodo tincidunt, ligula tortor dictum sapien, vitae aliquet ante mi quis felis. Cras interdum lacus est, eu finibus tortor pulvinar fringilla. Duis a lorem vehicula, tincidunt tortor finibus, efficitur libero. Curabitur at leo efficitur, vulputate lorem ac, suscipit felis. Phasellus mollis orci et ultrices finibus. Phasellus id sollicitudin nisi. Integer tristique, purus porttitor imperdiet auctor, ex nulla tempus ipsum, quis ornare nunc odio nec dolor. Duis venenatis aliquam maximus. Pellentesque eget eros quis urna venenatis tincidunt. Integer et dapibus sapien. Vestibulum ut lobortis quam. Donec dapibus neque in tortor porta suscipit. Nunc faucibus efficitur diam in convallis. Phasellus ex lectus, fermentum a lorem non, varius sagittis ante. Praesent eget enim viverra lectus luctus eleifend.</p>\n\n<p>Maecenas tincidunt mattis nunc, quis bibendum arcu tempor at. Suspendisse quis tincidunt lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque augue odio, scelerisque eu nulla eget, vestibulum rutrum diam. Sed aliquet leo ut nisi pharetra, id dictum felis bibendum. Quisque ipsum erat, sagittis a gravida eu, gravida a metus. Nullam tempus quis erat non iaculis.</p>\n', '2016-02-20 20:41:22', 63, 1, '56c8c161aa597.jpeg', 'Quisque laoreet tristique diam, sed imperdam tempus quis erat non iaculis.'),
(5, 'Lorem Ipsum', '<p>Quisque laoreet tristique diam, sed imperdiet leo ultricies auctor. Praesent tristique enim at pharetra ullamcorper. Curabitur leo turpis, vestibulum eget nisi vel, egestas pulvinar metus. Sed sit amet tortor porttitor, imperdiet sem a, faucibus enim. Proin aliquam nisl augue, ac tincidunt diam lobortis id. Pellentesque euismod dapibus rutrum. Ut a orci ullamcorper, ornare dolor sit amet, tempor dui.</p>\n\n<p>Sed ultricies, urna vel commodo tincidunt, ligula tortor dictum sapien, vitae aliquet ante mi quis felis. Cras interdum lacus est, eu finibus tortor pulvinar fringilla. Duis a lorem vehicula, tincidunt tortor finibus, efficitur libero. Curabitur at leo efficitur, vulputate lorem ac, suscipit felis. Phasellus mollis orci et ultrices finibus. Phasellus id sollicitudin nisi. Integer tristique, purus porttitor imperdiet auctor, ex nulla tempus ipsum, quis ornare nunc odio nec dolor. Duis venenatis aliquam maximus. Pellentesque eget eros quis urna venenatis tincidunt. Integer et dapibus sapien. Vestibulum ut lobortis quam. Donec dapibus neque in tortor porta suscipit. Nunc faucibus efficitur diam in convallis. Phasellus ex lectus, fermentum a lorem non, varius sagittis ante. Praesent eget enim viverra lectus luctus eleifend.</p>\n\n<p>Maecenas tincidunt mattis nunc, quis bibendum arcu tempor at. Suspendisse quis tincidunt lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque augue odio, scelerisque eu nulla eget, vestibulum rutrum diam. Sed aliquet leo ut nisi pharetra, id dictum felis bibendum. Quisque ipsum erat, sagittis a gravida eu, gravida a metus. Nullam tempus quis erat non iaculis.</p>\n\n<p>Quisque laoreet tristique diam, sed imperdiet leo ultricies auctor. Praesent tristique enim at pharetra ullamcorper. Curabitur leo turpis, vestibulum eget nisi vel, egestas pulvinar metus. Sed sit amet tortor porttitor, imperdiet sem a, faucibus enim. Proin aliquam nisl augue, ac tincidunt diam lobortis id. Pellentesque euismod dapibus rutrum. Ut a orci ullamcorper, ornare dolor sit amet, tempor dui.</p>\n\n<p>Sed ultricies, urna vel commodo tincidunt, ligula tortor dictum sapien, vitae aliquet ante mi quis felis. Cras interdum lacus est, eu finibus tortor pulvinar fringilla. Duis a lorem vehicula, tincidunt tortor finibus, efficitur libero. Curabitur at leo efficitur, vulputate lorem ac, suscipit felis. Phasellus mollis orci et ultrices finibus. Phasellus id sollicitudin nisi. Integer tristique, purus porttitor imperdiet auctor, ex nulla tempus ipsum, quis ornare nunc odio nec dolor. Duis venenatis aliquam maximus. Pellentesque eget eros quis urna venenatis tincidunt. Integer et dapibus sapien. Vestibulum ut lobortis quam. Donec dapibus neque in tortor porta suscipit. Nunc faucibus efficitur diam in convallis. Phasellus ex lectus, fermentum a lorem non, varius sagittis ante. Praesent eget enim viverra lectus luctus eleifend.</p>\n\n<p>Maecenas tincidunt mattis nunc, quis bibendum arcu tempor at. Suspendisse quis tincidunt lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque augue odio, scelerisque eu nulla eget, vestibulum rutrum diam. Sed aliquet leo ut nisi pharetra, id dictum felis bibendum. Quisque ipsum erat, sagittis a gravida eu, gravida a metus. Nullam tempus quis erat non iaculis.</p>\n', '2016-02-20 20:41:42', 63, 1, '56c8c161aa597.jpeg', 'Quisque laoreet tristique diam, sed imperdiet leo ultricies auctor. Praesent tristique enim at pharetra ullamcorper. Curabitur leo turpis, vestibulum eget nisi vel, egestas pulvinar metus. Sed sit amet tortor porttitor, imperdiet sem a, faucibus enim. Proin aliquam nisl augue, ac tincidunt diam lobortis id. Pellentesque euismod dapibus rutrum. Ut a orci ullamcorper, ornare dolor sit amet, tempor dui.'),
(6, 'Lorem ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in lectus sit amet eros laoreet cursus ac et mi. Vestibulum sit amet lectus scelerisque, elementum quam in, facilisis nunc. Sed id suscipit lacus, ac pretium neque. Aenean aliquet, turpis nec tempus pharetra, arcu libero consequat ex, nec posuere ante arcu eu erat. Sed molestie pulvinar diam eu dictum. Vivamus vel lorem dolor. Ut eget ultrices justo. Vivamus tempor nibh purus, eu commodo felis pellentesque vitae. Donec posuere dictum viverra. Donec tempus quis sem nec fermentum. Mauris eu nisl ut erat lacinia elementum at eget ex. Maecenas at tortor odio. Suspendisse aliquam mi eu orci fermentum, ac euismod lectus tincidunt. Etiam eu quam sollicitudin, convallis justo sit amet, porttitor enim. Maecenas quis accumsan neque. Aliquam fringilla mollis ante, vel lobortis diam ultrices eget.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in lectus sit amet eros laoreet cursus ac et mi. Vestibulum sit amet lectus scelerisque, elementum quam in, facilisis nunc. Sed id suscipit lacus, ac pretium neque. Aenean aliquet, turpis nec tempus pharetra, arcu libero consequat ex, nec posuere ante arcu eu erat. Sed molestie pulvinar diam eu dictum. Vivamus vel lorem dolor. Ut eget ultrices justo. Vivamus tempor nibh purus, eu commodo felis pellentesque vitae. Donec posuere dictum viverra. Donec tempus quis sem nec fermentum. Mauris eu nisl ut erat lacinia elementum at eget ex. Maecenas at tortor odio. Suspendisse aliquam mi eu orci fermentum, ac euismod lectus tincidunt. Etiam eu quam sollicitudin, convallis justo sit amet, porttitor enim. Maecenas quis accumsan neque. Aliquam fringilla mollis ante, vel lobortis diam ultrices eget.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in lectus sit amet eros laoreet cursus ac et mi. Vestibulum sit amet lectus scelerisque, elementum quam in, facilisis nunc. Sed id suscipit lacus, ac pretium neque. Aenean aliquet, turpis nec tempus pharetra, arcu libero consequat ex, nec posuere ante arcu eu erat. Sed molestie pulvinar diam eu dictum. Vivamus vel lorem dolor. Ut eget ultrices justo. Vivamus tempor nibh purus, eu commodo felis pellentesque vitae. Donec posuere dictum viverra. Donec tempus quis sem nec fermentum. Mauris eu nisl ut erat lacinia elementum at eget ex. Maecenas at tortor odio. Suspendisse aliquam mi eu orci fermentum, ac euismod lectus tincidunt. Etiam eu quam sollicitudin, convallis justo sit amet, porttitor enim. Maecenas quis accumsan neque. Aliquam fringilla mollis ante, vel lobortis diam ultrices eget.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in lectus sit amet eros laoreet cursus ac et mi. Vestibulum sit amet lectus scelerisque, elementum quam in, facilisis nunc. Sed id suscipit lacus, ac pretium neque. Aenean aliquet, turpis nec tempus pharetra, arcu libero consequat ex, nec posuere ante arcu eu erat. Sed molestie pulvinar diam eu dictum. Vivamus vel lorem dolor. Ut eget ultrices justo. Vivamus tempor nibh purus, eu commodo felis pellentesque vitae. Donec posuere dictum viverra. Donec tempus quis sem nec fermentum. Mauris eu nisl ut erat lacinia elementum at eget ex. Maecenas at tortor odio. Suspendisse aliquam mi eu orci fermentum, ac euismod lectus tincidunt. Etiam eu quam sollicitudin, convallis justo sit amet, porttitor enim. Maecenas quis accumsan neque. Aliquam fringilla mollis ante, vel lobortis diam ultrices eget.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in lectus sit amet eros laoreet cursus ac et mi. Vestibulum sit amet lectus scelerisque, elementum quam in, facilisis nunc. Sed id suscipit lacus, ac pretium neque. Aenean aliquet, turpis nec tempus pharetra, arcu libero consequat ex, nec posuere ante arcu eu erat. Sed molestie pulvinar diam eu dictum. Vivamus vel lorem dolor. Ut eget ultrices justo. Vivamus tempor nibh purus, eu commodo felis pellentesque vitae. Donec posuere dictum viverra. Donec tempus quis sem nec fermentum. Mauris eu nisl ut erat lacinia elementum at eget ex. Maecenas at tortor odio. Suspendisse aliquam mi eu orci fermentum, ac euismod lectus tincidunt. Etiam eu quam sollicitudin, convallis justo sit amet, porttitor enim. Maecenas quis accumsan neque. Aliquam fringilla mollis ante, vel lobortis diam ultrices eget.</p>\n', '2016-02-12 20:40:43', 57, 1, '56c8c13958518.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in lectus sit amet eros laoreet cursus ac et mi. Vestibulum sit amet lectus scelerisque, elementum quam in, facilisis nunc. Sed id suscipit lacus, ac pretium neque. Aenean aliquet, turpis nec tempus pharetra, arcu libero consequat ex, nec posuere ante arcu eu erat. Sed molestie pulvinar diam eu dictum. Vivamus vel lorem dolor. Ut eget ultrices justo. Vivamus tempor nibh purus, eu commodo felis pellentesque vitae. Donec posuere dictum viverra. Donec tempus quis sem nec fermentum. Mauris eu nisl ut erat lacinia elementum at eget ex. Maecenas at tortor odio. Suspendisse aliquam mi eu orci fermentum, ac euismod lectus tincidunt. Etiam eu quam sollicitudin, convallis justo sit amet, porttitor enim. Maecenas quis accumsan neque. Aliquam fringilla mollis ante, vel lobortis diam ultrices eget.'),
(7, 'Lorem Ipsum', '<p>Quisque laoreet tristique diam, sed imperdiet leo ultricies auctor. Praesent tristique enim at pharetra ullamcorper. Curabitur leo turpis, vestibulum eget nisi vel, egestas pulvinar metus. Sed sit amet tortor porttitor, imperdiet sem a, faucibus enim. Proin aliquam nisl augue, ac tincidunt diam lobortis id. Pellentesque euismod dapibus rutrum. Ut a orci ullamcorper, ornare dolor sit amet, tempor dui.</p>\n\n<p>Sed ultricies, urna vel commodo tincidunt, ligula tortor dictum sapien, vitae aliquet ante mi quis felis. Cras interdum lacus est, eu finibus tortor pulvinar fringilla. Duis a lorem vehicula, tincidunt tortor finibus, efficitur libero. Curabitur at leo efficitur, vulputate lorem ac, suscipit felis. Phasellus mollis orci et ultrices finibus. Phasellus id sollicitudin nisi. Integer tristique, purus porttitor imperdiet auctor, ex nulla tempus ipsum, quis ornare nunc odio nec dolor. Duis venenatis aliquam maximus. Pellentesque eget eros quis urna venenatis tincidunt. Integer et dapibus sapien. Vestibulum ut lobortis quam. Donec dapibus neque in tortor porta suscipit. Nunc faucibus efficitur diam in convallis. Phasellus ex lectus, fermentum a lorem non, varius sagittis ante. Praesent eget enim viverra lectus luctus eleifend.</p>\n\n<p>Maecenas tincidunt mattis nunc, quis bibendum arcu tempor at. Suspendisse quis tincidunt lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque augue odio, scelerisque eu nulla eget, vestibulum rutrum diam. Sed aliquet leo ut nisi pharetra, id dictum felis bibendum. Quisque ipsum erat, sagittis a gravida eu, gravida a metus. Nullam tempus quis erat non iaculis.</p>\n', '2016-02-20 20:41:05', 59, 1, '56c8c15168020.jpeg', 'Quisque laoreet tristique diam, sed imperdiet leo ultricies auctor. Praesent tristique enim at pharetra ullamcorper. Curabitur leo turpis, vestibulum eget nisi vel, egestas pulvinar metus. Sed sit amet tortor porttitor, imperdiet sem a, faucibus enim. Proin aliquam nisl augue, ac tincidunt diam lobortis id. Pellentesque euismod dapibus rutrum. Ut a orci ullamcorper, ornare dolor sit amet, tem'),
(8, 'Lorem Ipsum 3', '<p>Quisque laoreet tristique diam, sed imperdiet leo ultricies auctor. Praesent tristique enim at pharetra ullamcorper. Curabitur leo turpis, vestibulum eget nisi vel, egestas pulvinar metus. Sed sit amet tortor porttitor, imperdiet sem a, faucibus enim. Proin aliquam nisl augue, ac tincidunt diam lobortis id. Pellentesque euismod dapibus rutrum. Ut a orci ullamcorper, ornare dolor sit amet, tempor dui.</p>\n\n<p>Sed ultricies, urna vel commodo tincidunt, ligula tortor dictum sapien, vitae aliquet ante mi quis felis. Cras interdum lacus est, eu finibus tortor pulvinar fringilla. Duis a lorem vehicula, tincidunt tortor finibus, efficitur libero. Curabitur at leo efficitur, vulputate lorem ac, suscipit felis. Phasellus mollis orci et ultrices finibus. Phasellus id sollicitudin nisi. Integer tristique, purus porttitor imperdiet auctor, ex nulla tempus ipsum, quis ornare nunc odio nec dolor. Duis venenatis aliquam maximus. Pellentesque eget eros quis urna venenatis tincidunt. Integer et dapibus sapien. Vestibulum ut lobortis quam. Donec dapibus neque in tortor porta suscipit. Nunc faucibus efficitur diam in convallis. Phasellus ex lectus, fermentum a lorem non, varius sagittis ante. Praesent eget enim viverra lectus luctus eleifend.</p>\n\n<p>Maecenas tincidunt mattis nunc, quis bibendum arcu tempor at. Suspendisse quis tincidunt lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque augue odio, scelerisque eu nulla eget, vestibulum rutrum diam. Sed aliquet leo ut nisi pharetra, id dictum felis bibendum. Quisque ipsum erat, sagittis a gravida eu, gravida a metus. Nullam tempus quis erat non iaculis.</p>\n', '2016-02-20 20:41:22', 63, 1, '56c8c161aa597.jpeg', 'Quisque laoreet tristique diam, sed imperdam tempus quis erat non iaculis.'),
(9, 'Lorem Ipsum', '<p>Quisque laoreet tristique diam, sed imperdiet leo ultricies auctor. Praesent tristique enim at pharetra ullamcorper. Curabitur leo turpis, vestibulum eget nisi vel, egestas pulvinar metus. Sed sit amet tortor porttitor, imperdiet sem a, faucibus enim. Proin aliquam nisl augue, ac tincidunt diam lobortis id. Pellentesque euismod dapibus rutrum. Ut a orci ullamcorper, ornare dolor sit amet, tempor dui.</p>\n\n<p>Sed ultricies, urna vel commodo tincidunt, ligula tortor dictum sapien, vitae aliquet ante mi quis felis. Cras interdum lacus est, eu finibus tortor pulvinar fringilla. Duis a lorem vehicula, tincidunt tortor finibus, efficitur libero. Curabitur at leo efficitur, vulputate lorem ac, suscipit felis. Phasellus mollis orci et ultrices finibus. Phasellus id sollicitudin nisi. Integer tristique, purus porttitor imperdiet auctor, ex nulla tempus ipsum, quis ornare nunc odio nec dolor. Duis venenatis aliquam maximus. Pellentesque eget eros quis urna venenatis tincidunt. Integer et dapibus sapien. Vestibulum ut lobortis quam. Donec dapibus neque in tortor porta suscipit. Nunc faucibus efficitur diam in convallis. Phasellus ex lectus, fermentum a lorem non, varius sagittis ante. Praesent eget enim viverra lectus luctus eleifend.</p>\n\n<p>Maecenas tincidunt mattis nunc, quis bibendum arcu tempor at. Suspendisse quis tincidunt lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque augue odio, scelerisque eu nulla eget, vestibulum rutrum diam. Sed aliquet leo ut nisi pharetra, id dictum felis bibendum. Quisque ipsum erat, sagittis a gravida eu, gravida a metus. Nullam tempus quis erat non iaculis.</p>\n\n<p>Quisque laoreet tristique diam, sed imperdiet leo ultricies auctor. Praesent tristique enim at pharetra ullamcorper. Curabitur leo turpis, vestibulum eget nisi vel, egestas pulvinar metus. Sed sit amet tortor porttitor, imperdiet sem a, faucibus enim. Proin aliquam nisl augue, ac tincidunt diam lobortis id. Pellentesque euismod dapibus rutrum. Ut a orci ullamcorper, ornare dolor sit amet, tempor dui.</p>\n\n<p>Sed ultricies, urna vel commodo tincidunt, ligula tortor dictum sapien, vitae aliquet ante mi quis felis. Cras interdum lacus est, eu finibus tortor pulvinar fringilla. Duis a lorem vehicula, tincidunt tortor finibus, efficitur libero. Curabitur at leo efficitur, vulputate lorem ac, suscipit felis. Phasellus mollis orci et ultrices finibus. Phasellus id sollicitudin nisi. Integer tristique, purus porttitor imperdiet auctor, ex nulla tempus ipsum, quis ornare nunc odio nec dolor. Duis venenatis aliquam maximus. Pellentesque eget eros quis urna venenatis tincidunt. Integer et dapibus sapien. Vestibulum ut lobortis quam. Donec dapibus neque in tortor porta suscipit. Nunc faucibus efficitur diam in convallis. Phasellus ex lectus, fermentum a lorem non, varius sagittis ante. Praesent eget enim viverra lectus luctus eleifend.</p>\n\n<p>Maecenas tincidunt mattis nunc, quis bibendum arcu tempor at. Suspendisse quis tincidunt lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque augue odio, scelerisque eu nulla eget, vestibulum rutrum diam. Sed aliquet leo ut nisi pharetra, id dictum felis bibendum. Quisque ipsum erat, sagittis a gravida eu, gravida a metus. Nullam tempus quis erat non iaculis.</p>\n', '2016-02-20 20:41:42', 63, 1, '56c8c161aa597.jpeg', 'Quisque laoreet tristique diam, sed imperdiet leo ultricies auctor. Praesent tristique enim at pharetra ullamcorper. Curabitur leo turpis, vestibulum eget nisi vel, egestas pulvinar metus. Sed sit amet tortor porttitor, imperdiet sem a, faucibus enim. Proin aliquam nisl augue, ac tincidunt diam lobortis id. Pellentesque euismod dapibus rutrum. Ut a orci ullamcorper, ornare dolor sit amet, tempor dui.'),
(10, 'Lorem Ipsum', '<p>Quisque laoreet tristique diam, sed imperdiet leo ultricies auctor. Praesent tristique enim at pharetra ullamcorper. Curabitur leo turpis, vestibulum eget nisi vel, egestas pulvinar metus. Sed sit amet tortor porttitor, imperdiet sem a, faucibus enim. Proin aliquam nisl augue, ac tincidunt diam lobortis id. Pellentesque euismod dapibus rutrum. Ut a orci ullamcorper, ornare dolor sit amet, tempor dui.</p>\n\n<p>Sed ultricies, urna vel commodo tincidunt, ligula tortor dictum sapien, vitae aliquet ante mi quis felis. Cras interdum lacus est, eu finibus tortor pulvinar fringilla. Duis a lorem vehicula, tincidunt tortor finibus, efficitur libero. Curabitur at leo efficitur, vulputate lorem ac, suscipit felis. Phasellus mollis orci et ultrices finibus. Phasellus id sollicitudin nisi. Integer tristique, purus porttitor imperdiet auctor, ex nulla tempus ipsum, quis ornare nunc odio nec dolor. Duis venenatis aliquam maximus. Pellentesque eget eros quis urna venenatis tincidunt. Integer et dapibus sapien. Vestibulum ut lobortis quam. Donec dapibus neque in tortor porta suscipit. Nunc faucibus efficitur diam in convallis. Phasellus ex lectus, fermentum a lorem non, varius sagittis ante. Praesent eget enim viverra lectus luctus eleifend.</p>\n\n<p>Maecenas tincidunt mattis nunc, quis bibendum arcu tempor at. Suspendisse quis tincidunt lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque augue odio, scelerisque eu nulla eget, vestibulum rutrum diam. Sed aliquet leo ut nisi pharetra, id dictum felis bibendum. Quisque ipsum erat, sagittis a gravida eu, gravida a metus. Nullam tempus quis erat non iaculis.</p>\n\n<p>Quisque laoreet tristique diam, sed imperdiet leo ultricies auctor. Praesent tristique enim at pharetra ullamcorper. Curabitur leo turpis, vestibulum eget nisi vel, egestas pulvinar metus. Sed sit amet tortor porttitor, imperdiet sem a, faucibus enim. Proin aliquam nisl augue, ac tincidunt diam lobortis id. Pellentesque euismod dapibus rutrum. Ut a orci ullamcorper, ornare dolor sit amet, tempor dui.</p>\n\n<p>Sed ultricies, urna vel commodo tincidunt, ligula tortor dictum sapien, vitae aliquet ante mi quis felis. Cras interdum lacus est, eu finibus tortor pulvinar fringilla. Duis a lorem vehicula, tincidunt tortor finibus, efficitur libero. Curabitur at leo efficitur, vulputate lorem ac, suscipit felis. Phasellus mollis orci et ultrices finibus. Phasellus id sollicitudin nisi. Integer tristique, purus porttitor imperdiet auctor, ex nulla tempus ipsum, quis ornare nunc odio nec dolor. Duis venenatis aliquam maximus. Pellentesque eget eros quis urna venenatis tincidunt. Integer et dapibus sapien. Vestibulum ut lobortis quam. Donec dapibus neque in tortor porta suscipit. Nunc faucibus efficitur diam in convallis. Phasellus ex lectus, fermentum a lorem non, varius sagittis ante. Praesent eget enim viverra lectus luctus eleifend.</p>\n\n<p>Maecenas tincidunt mattis nunc, quis bibendum arcu tempor at. Suspendisse quis tincidunt lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque augue odio, scelerisque eu nulla eget, vestibulum rutrum diam. Sed aliquet leo ut nisi pharetra, id dictum felis bibendum. Quisque ipsum erat, sagittis a gravida eu, gravida a metus. Nullam tempus quis erat non iaculis.</p>\n', '2016-02-20 20:41:42', 63, 1, '56c8c161aa597.jpeg', 'Quisque laoreet tristique diam, sed imperdiet leo ultricies auctor. Praesent tristique enim at pharetra ullamcorper. Curabitur leo turpis, vestibulum eget nisi vel, egestas pulvinar metus. Sed sit amet tortor porttitor, imperdiet sem a, faucibus enim. Proin aliquam nisl augue, ac tincidunt diam lobortis id. Pellentesque euismod dapibus rutrum. Ut a orci ullamcorper, ornare dolor sit amet, tempor dui.'),
(11, 'Lorem Ipsum', '<p>Quisque laoreet tristique diam, sed imperdiet leo ultricies auctor. Praesent tristique enim at pharetra ullamcorper. Curabitur leo turpis, vestibulum eget nisi vel, egestas pulvinar metus. Sed sit amet tortor porttitor, imperdiet sem a, faucibus enim. Proin aliquam nisl augue, ac tincidunt diam lobortis id. Pellentesque euismod dapibus rutrum. Ut a orci ullamcorper, ornare dolor sit amet, tempor dui.</p>\n\n<p>Sed ultricies, urna vel commodo tincidunt, ligula tortor dictum sapien, vitae aliquet ante mi quis felis. Cras interdum lacus est, eu finibus tortor pulvinar fringilla. Duis a lorem vehicula, tincidunt tortor finibus, efficitur libero. Curabitur at leo efficitur, vulputate lorem ac, suscipit felis. Phasellus mollis orci et ultrices finibus. Phasellus id sollicitudin nisi. Integer tristique, purus porttitor imperdiet auctor, ex nulla tempus ipsum, quis ornare nunc odio nec dolor. Duis venenatis aliquam maximus. Pellentesque eget eros quis urna venenatis tincidunt. Integer et dapibus sapien. Vestibulum ut lobortis quam. Donec dapibus neque in tortor porta suscipit. Nunc faucibus efficitur diam in convallis. Phasellus ex lectus, fermentum a lorem non, varius sagittis ante. Praesent eget enim viverra lectus luctus eleifend.</p>\n\n<p>Maecenas tincidunt mattis nunc, quis bibendum arcu tempor at. Suspendisse quis tincidunt lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque augue odio, scelerisque eu nulla eget, vestibulum rutrum diam. Sed aliquet leo ut nisi pharetra, id dictum felis bibendum. Quisque ipsum erat, sagittis a gravida eu, gravida a metus. Nullam tempus quis erat non iaculis.</p>\n\n<p>Quisque laoreet tristique diam, sed imperdiet leo ultricies auctor. Praesent tristique enim at pharetra ullamcorper. Curabitur leo turpis, vestibulum eget nisi vel, egestas pulvinar metus. Sed sit amet tortor porttitor, imperdiet sem a, faucibus enim. Proin aliquam nisl augue, ac tincidunt diam lobortis id. Pellentesque euismod dapibus rutrum. Ut a orci ullamcorper, ornare dolor sit amet, tempor dui.</p>\n\n<p>Sed ultricies, urna vel commodo tincidunt, ligula tortor dictum sapien, vitae aliquet ante mi quis felis. Cras interdum lacus est, eu finibus tortor pulvinar fringilla. Duis a lorem vehicula, tincidunt tortor finibus, efficitur libero. Curabitur at leo efficitur, vulputate lorem ac, suscipit felis. Phasellus mollis orci et ultrices finibus. Phasellus id sollicitudin nisi. Integer tristique, purus porttitor imperdiet auctor, ex nulla tempus ipsum, quis ornare nunc odio nec dolor. Duis venenatis aliquam maximus. Pellentesque eget eros quis urna venenatis tincidunt. Integer et dapibus sapien. Vestibulum ut lobortis quam. Donec dapibus neque in tortor porta suscipit. Nunc faucibus efficitur diam in convallis. Phasellus ex lectus, fermentum a lorem non, varius sagittis ante. Praesent eget enim viverra lectus luctus eleifend.</p>\n\n<p>Maecenas tincidunt mattis nunc, quis bibendum arcu tempor at. Suspendisse quis tincidunt lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque augue odio, scelerisque eu nulla eget, vestibulum rutrum diam. Sed aliquet leo ut nisi pharetra, id dictum felis bibendum. Quisque ipsum erat, sagittis a gravida eu, gravida a metus. Nullam tempus quis erat non iaculis.</p>\n', '2016-02-20 20:41:42', 63, 1, '56c8c161aa597.jpeg', 'Quisque laoreet tristique diam, sed imperdiet leo ultricies auctor. Praesent tristique enim at pharetra ullamcorper. Curabitur leo turpis, vestibulum eget nisi vel, egestas pulvinar metus. Sed sit amet tortor porttitor, imperdiet sem a, faucibus enim. Proin aliquam nisl augue, ac tincidunt diam lobortis id. Pellentesque euismod dapibus rutrum. Ut a orci ullamcorper, ornare dolor sit amet, tempor dui.'),
(12, 'Lorem Ipsum', '<p>Quisque laoreet tristique diam, sed imperdiet leo ultricies auctor. Praesent tristique enim at pharetra ullamcorper. Curabitur leo turpis, vestibulum eget nisi vel, egestas pulvinar metus. Sed sit amet tortor porttitor, imperdiet sem a, faucibus enim. Proin aliquam nisl augue, ac tincidunt diam lobortis id. Pellentesque euismod dapibus rutrum. Ut a orci ullamcorper, ornare dolor sit amet, tempor dui.</p>\n\n<p>Sed ultricies, urna vel commodo tincidunt, ligula tortor dictum sapien, vitae aliquet ante mi quis felis. Cras interdum lacus est, eu finibus tortor pulvinar fringilla. Duis a lorem vehicula, tincidunt tortor finibus, efficitur libero. Curabitur at leo efficitur, vulputate lorem ac, suscipit felis. Phasellus mollis orci et ultrices finibus. Phasellus id sollicitudin nisi. Integer tristique, purus porttitor imperdiet auctor, ex nulla tempus ipsum, quis ornare nunc odio nec dolor. Duis venenatis aliquam maximus. Pellentesque eget eros quis urna venenatis tincidunt. Integer et dapibus sapien. Vestibulum ut lobortis quam. Donec dapibus neque in tortor porta suscipit. Nunc faucibus efficitur diam in convallis. Phasellus ex lectus, fermentum a lorem non, varius sagittis ante. Praesent eget enim viverra lectus luctus eleifend.</p>\n\n<p>Maecenas tincidunt mattis nunc, quis bibendum arcu tempor at. Suspendisse quis tincidunt lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque augue odio, scelerisque eu nulla eget, vestibulum rutrum diam. Sed aliquet leo ut nisi pharetra, id dictum felis bibendum. Quisque ipsum erat, sagittis a gravida eu, gravida a metus. Nullam tempus quis erat non iaculis.</p>\n\n<p>Quisque laoreet tristique diam, sed imperdiet leo ultricies auctor. Praesent tristique enim at pharetra ullamcorper. Curabitur leo turpis, vestibulum eget nisi vel, egestas pulvinar metus. Sed sit amet tortor porttitor, imperdiet sem a, faucibus enim. Proin aliquam nisl augue, ac tincidunt diam lobortis id. Pellentesque euismod dapibus rutrum. Ut a orci ullamcorper, ornare dolor sit amet, tempor dui.</p>\n\n<p>Sed ultricies, urna vel commodo tincidunt, ligula tortor dictum sapien, vitae aliquet ante mi quis felis. Cras interdum lacus est, eu finibus tortor pulvinar fringilla. Duis a lorem vehicula, tincidunt tortor finibus, efficitur libero. Curabitur at leo efficitur, vulputate lorem ac, suscipit felis. Phasellus mollis orci et ultrices finibus. Phasellus id sollicitudin nisi. Integer tristique, purus porttitor imperdiet auctor, ex nulla tempus ipsum, quis ornare nunc odio nec dolor. Duis venenatis aliquam maximus. Pellentesque eget eros quis urna venenatis tincidunt. Integer et dapibus sapien. Vestibulum ut lobortis quam. Donec dapibus neque in tortor porta suscipit. Nunc faucibus efficitur diam in convallis. Phasellus ex lectus, fermentum a lorem non, varius sagittis ante. Praesent eget enim viverra lectus luctus eleifend.</p>\n\n<p>Maecenas tincidunt mattis nunc, quis bibendum arcu tempor at. Suspendisse quis tincidunt lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque augue odio, scelerisque eu nulla eget, vestibulum rutrum diam. Sed aliquet leo ut nisi pharetra, id dictum felis bibendum. Quisque ipsum erat, sagittis a gravida eu, gravida a metus. Nullam tempus quis erat non iaculis.</p>\n', '2016-02-20 20:41:42', 63, 1, '56c8c161aa597.jpeg', 'Quisque laoreet tristique diam, sed imperdiet leo ultricies auctor. Praesent tristique enim at pharetra ullamcorper. Curabitur leo turpis, vestibulum eget nisi vel, egestas pulvinar metus. Sed sit amet tortor porttitor, imperdiet sem a, faucibus enim. Proin aliquam nisl augue, ac tincidunt diam lobortis id. Pellentesque euismod dapibus rutrum. Ut a orci ullamcorper, ornare dolor sit amet, tempor dui.'),
(13, 'Lorem Ipsum', '<p>Quisque laoreet tristique diam, sed imperdiet leo ultricies auctor. Praesent tristique enim at pharetra ullamcorper. Curabitur leo turpis, vestibulum eget nisi vel, egestas pulvinar metus. Sed sit amet tortor porttitor, imperdiet sem a, faucibus enim. Proin aliquam nisl augue, ac tincidunt diam lobortis id. Pellentesque euismod dapibus rutrum. Ut a orci ullamcorper, ornare dolor sit amet, tempor dui.</p>\n\n<p>Sed ultricies, urna vel commodo tincidunt, ligula tortor dictum sapien, vitae aliquet ante mi quis felis. Cras interdum lacus est, eu finibus tortor pulvinar fringilla. Duis a lorem vehicula, tincidunt tortor finibus, efficitur libero. Curabitur at leo efficitur, vulputate lorem ac, suscipit felis. Phasellus mollis orci et ultrices finibus. Phasellus id sollicitudin nisi. Integer tristique, purus porttitor imperdiet auctor, ex nulla tempus ipsum, quis ornare nunc odio nec dolor. Duis venenatis aliquam maximus. Pellentesque eget eros quis urna venenatis tincidunt. Integer et dapibus sapien. Vestibulum ut lobortis quam. Donec dapibus neque in tortor porta suscipit. Nunc faucibus efficitur diam in convallis. Phasellus ex lectus, fermentum a lorem non, varius sagittis ante. Praesent eget enim viverra lectus luctus eleifend.</p>\n\n<p>Maecenas tincidunt mattis nunc, quis bibendum arcu tempor at. Suspendisse quis tincidunt lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque augue odio, scelerisque eu nulla eget, vestibulum rutrum diam. Sed aliquet leo ut nisi pharetra, id dictum felis bibendum. Quisque ipsum erat, sagittis a gravida eu, gravida a metus. Nullam tempus quis erat non iaculis.</p>\n\n<p>Quisque laoreet tristique diam, sed imperdiet leo ultricies auctor. Praesent tristique enim at pharetra ullamcorper. Curabitur leo turpis, vestibulum eget nisi vel, egestas pulvinar metus. Sed sit amet tortor porttitor, imperdiet sem a, faucibus enim. Proin aliquam nisl augue, ac tincidunt diam lobortis id. Pellentesque euismod dapibus rutrum. Ut a orci ullamcorper, ornare dolor sit amet, tempor dui.</p>\n\n<p>Sed ultricies, urna vel commodo tincidunt, ligula tortor dictum sapien, vitae aliquet ante mi quis felis. Cras interdum lacus est, eu finibus tortor pulvinar fringilla. Duis a lorem vehicula, tincidunt tortor finibus, efficitur libero. Curabitur at leo efficitur, vulputate lorem ac, suscipit felis. Phasellus mollis orci et ultrices finibus. Phasellus id sollicitudin nisi. Integer tristique, purus porttitor imperdiet auctor, ex nulla tempus ipsum, quis ornare nunc odio nec dolor. Duis venenatis aliquam maximus. Pellentesque eget eros quis urna venenatis tincidunt. Integer et dapibus sapien. Vestibulum ut lobortis quam. Donec dapibus neque in tortor porta suscipit. Nunc faucibus efficitur diam in convallis. Phasellus ex lectus, fermentum a lorem non, varius sagittis ante. Praesent eget enim viverra lectus luctus eleifend.</p>\n\n<p>Maecenas tincidunt mattis nunc, quis bibendum arcu tempor at. Suspendisse quis tincidunt lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque augue odio, scelerisque eu nulla eget, vestibulum rutrum diam. Sed aliquet leo ut nisi pharetra, id dictum felis bibendum. Quisque ipsum erat, sagittis a gravida eu, gravida a metus. Nullam tempus quis erat non iaculis.</p>\n', '2016-02-20 20:41:42', 63, 1, '56c8c161aa597.jpeg', 'Quisque laoreet tristique diam, sed imperdiet leo ultricies auctor. Praesent tristique enim at pharetra ullamcorper. Curabitur leo turpis, vestibulum eget nisi vel, egestas pulvinar metus. Sed sit amet tortor porttitor, imperdiet sem a, faucibus enim. Proin aliquam nisl augue, ac tincidunt diam lobortis id. Pellentesque euismod dapibus rutrum. Ut a orci ullamcorper, ornare dolor sit amet, tempor dui.'),
(14, 'Lorem Ipsum 3', '<p>Quisque laoreet tristique diam, sed imperdiet leo ultricies auctor. Praesent tristique enim at pharetra ullamcorper. Curabitur leo turpis, vestibulum eget nisi vel, egestas pulvinar metus. Sed sit amet tortor porttitor, imperdiet sem a, faucibus enim. Proin aliquam nisl augue, ac tincidunt diam lobortis id. Pellentesque euismod dapibus rutrum. Ut a orci ullamcorper, ornare dolor sit amet, tempor dui.</p>\n\n<p>Sed ultricies, urna vel commodo tincidunt, ligula tortor dictum sapien, vitae aliquet ante mi quis felis. Cras interdum lacus est, eu finibus tortor pulvinar fringilla. Duis a lorem vehicula, tincidunt tortor finibus, efficitur libero. Curabitur at leo efficitur, vulputate lorem ac, suscipit felis. Phasellus mollis orci et ultrices finibus. Phasellus id sollicitudin nisi. Integer tristique, purus porttitor imperdiet auctor, ex nulla tempus ipsum, quis ornare nunc odio nec dolor. Duis venenatis aliquam maximus. Pellentesque eget eros quis urna venenatis tincidunt. Integer et dapibus sapien. Vestibulum ut lobortis quam. Donec dapibus neque in tortor porta suscipit. Nunc faucibus efficitur diam in convallis. Phasellus ex lectus, fermentum a lorem non, varius sagittis ante. Praesent eget enim viverra lectus luctus eleifend.</p>\n\n<p>Maecenas tincidunt mattis nunc, quis bibendum arcu tempor at. Suspendisse quis tincidunt lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque augue odio, scelerisque eu nulla eget, vestibulum rutrum diam. Sed aliquet leo ut nisi pharetra, id dictum felis bibendum. Quisque ipsum erat, sagittis a gravida eu, gravida a metus. Nullam tempus quis erat non iaculis.</p>\n', '2016-02-20 20:41:22', 63, 1, '56c8c161aa597.jpeg', 'Quisque laoreet tristique diam, sed imperdam tempus quis erat non iaculis.'),
(15, 'Lorem Ipsum', '<p>Quisque laoreet tristique diam, sed imperdiet leo ultricies auctor. Praesent tristique enim at pharetra ullamcorper. Curabitur leo turpis, vestibulum eget nisi vel, egestas pulvinar metus. Sed sit amet tortor porttitor, imperdiet sem a, faucibus enim. Proin aliquam nisl augue, ac tincidunt diam lobortis id. Pellentesque euismod dapibus rutrum. Ut a orci ullamcorper, ornare dolor sit amet, tempor dui.</p>\n\n<p>Sed ultricies, urna vel commodo tincidunt, ligula tortor dictum sapien, vitae aliquet ante mi quis felis. Cras interdum lacus est, eu finibus tortor pulvinar fringilla. Duis a lorem vehicula, tincidunt tortor finibus, efficitur libero. Curabitur at leo efficitur, vulputate lorem ac, suscipit felis. Phasellus mollis orci et ultrices finibus. Phasellus id sollicitudin nisi. Integer tristique, purus porttitor imperdiet auctor, ex nulla tempus ipsum, quis ornare nunc odio nec dolor. Duis venenatis aliquam maximus. Pellentesque eget eros quis urna venenatis tincidunt. Integer et dapibus sapien. Vestibulum ut lobortis quam. Donec dapibus neque in tortor porta suscipit. Nunc faucibus efficitur diam in convallis. Phasellus ex lectus, fermentum a lorem non, varius sagittis ante. Praesent eget enim viverra lectus luctus eleifend.</p>\n\n<p>Maecenas tincidunt mattis nunc, quis bibendum arcu tempor at. Suspendisse quis tincidunt lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque augue odio, scelerisque eu nulla eget, vestibulum rutrum diam. Sed aliquet leo ut nisi pharetra, id dictum felis bibendum. Quisque ipsum erat, sagittis a gravida eu, gravida a metus. Nullam tempus quis erat non iaculis.</p>\n\n<p>Quisque laoreet tristique diam, sed imperdiet leo ultricies auctor. Praesent tristique enim at pharetra ullamcorper. Curabitur leo turpis, vestibulum eget nisi vel, egestas pulvinar metus. Sed sit amet tortor porttitor, imperdiet sem a, faucibus enim. Proin aliquam nisl augue, ac tincidunt diam lobortis id. Pellentesque euismod dapibus rutrum. Ut a orci ullamcorper, ornare dolor sit amet, tempor dui.</p>\n\n<p>Sed ultricies, urna vel commodo tincidunt, ligula tortor dictum sapien, vitae aliquet ante mi quis felis. Cras interdum lacus est, eu finibus tortor pulvinar fringilla. Duis a lorem vehicula, tincidunt tortor finibus, efficitur libero. Curabitur at leo efficitur, vulputate lorem ac, suscipit felis. Phasellus mollis orci et ultrices finibus. Phasellus id sollicitudin nisi. Integer tristique, purus porttitor imperdiet auctor, ex nulla tempus ipsum, quis ornare nunc odio nec dolor. Duis venenatis aliquam maximus. Pellentesque eget eros quis urna venenatis tincidunt. Integer et dapibus sapien. Vestibulum ut lobortis quam. Donec dapibus neque in tortor porta suscipit. Nunc faucibus efficitur diam in convallis. Phasellus ex lectus, fermentum a lorem non, varius sagittis ante. Praesent eget enim viverra lectus luctus eleifend.</p>\n\n<p>Maecenas tincidunt mattis nunc, quis bibendum arcu tempor at. Suspendisse quis tincidunt lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque augue odio, scelerisque eu nulla eget, vestibulum rutrum diam. Sed aliquet leo ut nisi pharetra, id dictum felis bibendum. Quisque ipsum erat, sagittis a gravida eu, gravida a metus. Nullam tempus quis erat non iaculis.</p>\n', '2016-02-20 20:41:42', 63, 1, '56c8c161aa597.jpeg', 'Quisque laoreet tristique diam, sed imperdiet leo ultricies auctor. Praesent tristique enim at pharetra ullamcorper. Curabitur leo turpis, vestibulum eget nisi vel, egestas pulvinar metus. Sed sit amet tortor porttitor, imperdiet sem a, faucibus enim. Proin aliquam nisl augue, ac tincidunt diam lobortis id. Pellentesque euismod dapibus rutrum. Ut a orci ullamcorper, ornare dolor sit amet, tempor dui.');
INSERT INTO `actualites` (`id`, `titre`, `contenu`, `dateAjout`, `idCategorie`, `idAuteur`, `image`, `resume`) VALUES
(16, 'Lorem Ipsum', '<p>Quisque laoreet tristique diam, sed imperdiet leo ultricies auctor. Praesent tristique enim at pharetra ullamcorper. Curabitur leo turpis, vestibulum eget nisi vel, egestas pulvinar metus. Sed sit amet tortor porttitor, imperdiet sem a, faucibus enim. Proin aliquam nisl augue, ac tincidunt diam lobortis id. Pellentesque euismod dapibus rutrum. Ut a orci ullamcorper, ornare dolor sit amet, tempor dui.</p>\n\n<p>Sed ultricies, urna vel commodo tincidunt, ligula tortor dictum sapien, vitae aliquet ante mi quis felis. Cras interdum lacus est, eu finibus tortor pulvinar fringilla. Duis a lorem vehicula, tincidunt tortor finibus, efficitur libero. Curabitur at leo efficitur, vulputate lorem ac, suscipit felis. Phasellus mollis orci et ultrices finibus. Phasellus id sollicitudin nisi. Integer tristique, purus porttitor imperdiet auctor, ex nulla tempus ipsum, quis ornare nunc odio nec dolor. Duis venenatis aliquam maximus. Pellentesque eget eros quis urna venenatis tincidunt. Integer et dapibus sapien. Vestibulum ut lobortis quam. Donec dapibus neque in tortor porta suscipit. Nunc faucibus efficitur diam in convallis. Phasellus ex lectus, fermentum a lorem non, varius sagittis ante. Praesent eget enim viverra lectus luctus eleifend.</p>\n\n<p>Maecenas tincidunt mattis nunc, quis bibendum arcu tempor at. Suspendisse quis tincidunt lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque augue odio, scelerisque eu nulla eget, vestibulum rutrum diam. Sed aliquet leo ut nisi pharetra, id dictum felis bibendum. Quisque ipsum erat, sagittis a gravida eu, gravida a metus. Nullam tempus quis erat non iaculis.</p>\n\n<p>Quisque laoreet tristique diam, sed imperdiet leo ultricies auctor. Praesent tristique enim at pharetra ullamcorper. Curabitur leo turpis, vestibulum eget nisi vel, egestas pulvinar metus. Sed sit amet tortor porttitor, imperdiet sem a, faucibus enim. Proin aliquam nisl augue, ac tincidunt diam lobortis id. Pellentesque euismod dapibus rutrum. Ut a orci ullamcorper, ornare dolor sit amet, tempor dui.</p>\n\n<p>Sed ultricies, urna vel commodo tincidunt, ligula tortor dictum sapien, vitae aliquet ante mi quis felis. Cras interdum lacus est, eu finibus tortor pulvinar fringilla. Duis a lorem vehicula, tincidunt tortor finibus, efficitur libero. Curabitur at leo efficitur, vulputate lorem ac, suscipit felis. Phasellus mollis orci et ultrices finibus. Phasellus id sollicitudin nisi. Integer tristique, purus porttitor imperdiet auctor, ex nulla tempus ipsum, quis ornare nunc odio nec dolor. Duis venenatis aliquam maximus. Pellentesque eget eros quis urna venenatis tincidunt. Integer et dapibus sapien. Vestibulum ut lobortis quam. Donec dapibus neque in tortor porta suscipit. Nunc faucibus efficitur diam in convallis. Phasellus ex lectus, fermentum a lorem non, varius sagittis ante. Praesent eget enim viverra lectus luctus eleifend.</p>\n\n<p>Maecenas tincidunt mattis nunc, quis bibendum arcu tempor at. Suspendisse quis tincidunt lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque augue odio, scelerisque eu nulla eget, vestibulum rutrum diam. Sed aliquet leo ut nisi pharetra, id dictum felis bibendum. Quisque ipsum erat, sagittis a gravida eu, gravida a metus. Nullam tempus quis erat non iaculis.</p>\n', '2016-02-20 20:41:42', 63, 1, '56c8c161aa597.jpeg', 'Quisque laoreet tristique diam, sed imperdiet leo ultricies auctor. Praesent tristique enim at pharetra ullamcorper. Curabitur leo turpis, vestibulum eget nisi vel, egestas pulvinar metus. Sed sit amet tortor porttitor, imperdiet sem a, faucibus enim. Proin aliquam nisl augue, ac tincidunt diam lobortis id. Pellentesque euismod dapibus rutrum. Ut a orci ullamcorper, ornare dolor sit amet, tempor dui.');

-- --------------------------------------------------------

--
-- Structure de la table `blocdownload`
--

CREATE TABLE IF NOT EXISTS `blocdownload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pdf` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `idModule` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `sstitre` varchar(255) NOT NULL,
  `intitule` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `blocdownload`
--

INSERT INTO `blocdownload` (`id`, `pdf`, `image`, `idModule`, `titre`, `sstitre`, `intitule`) VALUES
(8, '56c76fd4c336c.pdf', '56c76fd4bfef2.png', 12, 'Bulletin municipal 2014', 'Ville de buzancais', 'Bulletin municipal 2014 téléchargeable au format PDF'),
(7, '56c76e6ee7c75.pdf', '56c76e6ee1c6b.jpeg', 12, 'Calendrier cantonale', 'Ville de buzancais', 'Calendrier cantonale 2014 téléchargeable au format PDF');

-- --------------------------------------------------------

--
-- Structure de la table `categoriephotos`
--

CREATE TABLE IF NOT EXISTS `categoriephotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Repertoire` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `categoriephotos`
--

INSERT INTO `categoriephotos` (`id`, `Nom`, `Repertoire`) VALUES
(22, 'Cérémonies', 'Ceereemonies'),
(23, 'Festivités', 'Festivitees'),
(24, 'Evènements', 'Eveenements'),
(25, 'Médiathèque', 'Meediatheeque');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idParent` int(11) DEFAULT NULL,
  `Nom` varchar(255) NOT NULL,
  `Description` text,
  `DateAjout` datetime NOT NULL,
  `Statut` tinyint(4) DEFAULT NULL,
  `Ordre` varchar(255) NOT NULL,
  `Depth` int(11) NOT NULL,
  `color` varchar(10) NOT NULL,
  `icone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `idParent`, `Nom`, `Description`, `DateAjout`, `Statut`, `Ordre`, `Depth`, `color`, `icone`) VALUES
(63, NULL, 'Sport', '', '2016-02-16 19:55:45', 1, '6', 0, '#bf0ec8', '56c37023168d9.png'),
(58, NULL, 'Culture', '', '2016-02-16 19:35:24', 1, '1', 0, '#ff7d00', '56c36bc64fc1e.png'),
(60, NULL, 'Economie', '', '2016-02-16 19:55:01', 1, '3', 0, '#ff003f', '56c36ff7a0f4c.png'),
(61, NULL, 'Famille', '', '2016-02-16 19:55:13', 1, '4', 0, '#0030ff', '56c37002ea36b.png'),
(62, NULL, 'Histoire', '', '2016-02-16 19:55:33', 1, '5', 0, '#7e4b06', '56c37016ee12d.png'),
(59, NULL, 'Environnement', '', '2016-02-16 19:54:41', 1, '2', 0, '#00ff20', '56c36fe2cb661.png'),
(57, NULL, 'Action Social', '', '2016-02-16 19:34:49', 1, '0', 0, '#1e00ff', '56c36bd3e741a.png'),
(64, NULL, 'Vie Administrative', '', '2016-02-16 19:55:58', 1, '7', 0, '#0e74c8', '56c37030555ba.png');

-- --------------------------------------------------------

--
-- Structure de la table `coordonnees`
--

CREATE TABLE IF NOT EXISTS `coordonnees` (
  `nom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `cp` varchar(7) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `horaires` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `coordonnees`
--

INSERT INTO `coordonnees` (`nom`, `adresse`, `cp`, `ville`, `tel`, `fax`, `mail`, `horaires`) VALUES
('Mairie de Buzançais', '10 Avenue de la république', '36500', 'Buzançais', '02.54.84.19.33', '02.54.02.13.45', 'mairie.buzancais@buzancais.fr', 'Le Lundi : de 14h30 à 17h30\nDu Mardi au Vendredi : de 09h00 à 12h00 et de 14h30 à 17h30\nLe Samedi : de 09h00 à 12h00');

-- --------------------------------------------------------

--
-- Structure de la table `diaporamas`
--

CREATE TABLE IF NOT EXISTS `diaporamas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idModule` int(11) NOT NULL,
  `Contenu` text NOT NULL,
  `imageFile` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `diaporamas`
--

INSERT INTO `diaporamas` (`id`, `idModule`, `Contenu`, `imageFile`) VALUES
(6, 10, '<p><span style="font-size:18px">Lorem ipsum dolor sit amet</span></p>\n\n<p>dqsdsdqsd sdqs dqsld ksqldk lsqdmklsm kdlqsmkd lsmqkd lskdlqs kd qslkm</p>\n\n<p><a href="http://buzancais.fr/">http://buzancais.fr/</a></p>\n', '56c720d76967c.jpeg'),
(4, 10, '<p><span style="font-size:18px">Lorem ipsum dolor sit amet</span></p>\n\n<p>dqsdsdqsd sdqs dqsld ksqldk lsqdmklsm kdlqsmkd lsmqkd lskdlqs kd qslkm</p>\n\n<p><a href="http://buzancais.fr/">http://buzancais.fr/</a></p>\n', '56c72063bf4fd.jpeg'),
(5, 10, '<p><span style="font-size:18px">Lorem ipsum dolor sit amet</span></p>\n\n<p>dqsdsdqsd sdqs dqsld ksqldk lsqdmklsm kdlqsmkd lsmqkd lskdlqs kd qslkm</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n', '56c720a3dfdc2.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

CREATE TABLE IF NOT EXISTS `evenements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dateEvenement` datetime NOT NULL,
  `resume` text NOT NULL,
  `contenu` text NOT NULL,
  `idCategorie` int(11) NOT NULL,
  `dateAjout` datetime NOT NULL,
  `titre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `evenements`
--

INSERT INTO `evenements` (`id`, `dateEvenement`, `resume`, `contenu`, `idCategorie`, `dateAjout`, `titre`) VALUES
(1, '2016-02-24 12:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. utrum nunc eget quam venenatis efficitur. Phasellus nec tincidunt magna.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse convallis luctus nisl. Ut dictum metus venenatis lectus suscipit volutpat. Pellentesque porttitor, urna ac dictum porta, leo arcu consectetur enim, in molestie nibh dolor id nisi. Aenean purus neque, imperdiet eu porta et, vehicula quis purus. Morbi porttitor fringilla pretium. Donec rutrum nunc eget quam venenatis efficitur. Phasellus nec tincidunt magna.</p>\n\n<p>Praesent magna dui, ornare quis mauris ultricies, bibendum egestas mi. In tellus turpis, mollis vitae sodales sed, ornare at velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam dapibus ultricies ultricies. Nunc vel erat nulla. Etiam suscipit ipsum ante, eu semper tortor rhoncus ut. Sed faucibus mi a nibh placerat, at tempus mi imperdiet. Aliquam lobortis, justo ac malesuada imperdiet, orci nulla tempus nibh, et varius eros ex quis sapien. Sed eget enim eu arcu lacinia aliquam. Fusce sit amet volutpat sapien, eleifend ornare ante. Pellentesque vulputate non magna et malesuada.</p>\n', 58, '2016-02-20 15:38:27', 'Lorem Ipsum'),
(2, '2016-03-04 12:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse convallis luctus nisl. Ut dictum metus venenatis lectus suscipit volutpat. Pellentesque porttitor, urna ac dictum porta, leo arcu consectetur enim, in molestie nibh dolor id nisi. Aenean', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse convallis luctus nisl. Ut dictum metus venenatis lectus suscipit volutpat. Pellentesque porttitor, urna ac dictum porta, leo arcu consectetur enim, in molestie nibh dolor id nisi. Aenean purus neque, imperdiet eu porta et, vehicula quis purus. Morbi porttitor fringilla pretium. Donec rutrum nunc eget quam venenatis efficitur. Phasellus nec tincidunt magna.</p>\n\n<p>Praesent magna dui, ornare quis mauris ultricies, bibendum egestas mi. In tellus turpis, mollis vitae sodales sed, ornare at velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam dapibus ultricies ultricies. Nunc vel erat nulla. Etiam suscipit ipsum ante, eu semper tortor rhoncus ut. Sed faucibus mi a nibh placerat, at tempus mi imperdiet. Aliquam lobortis, justo ac malesuada imperdiet, orci nulla tempus nibh, et varius eros ex quis sapien. Sed eget enim eu arcu lacinia aliquam. Fusce sit amet volutpat sapien, eleifend ornare ante. Pellentesque vulputate non magna et malesuada.</p>\n\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse convallis luctus nisl. Ut dictum metus venenatis lectus suscipit volutpat. Pellentesque porttitor, urna ac dictum porta, leo arcu consectetur enim, in molestie nibh dolor id nisi. Aenean purus neque, imperdiet eu porta et, vehicula quis purus. Morbi porttitor fringilla pretium. Donec rutrum nunc eget quam venenatis efficitur. Phasellus nec tincidunt magna.</p>\n\n<p>Praesent magna dui, ornare quis mauris ultricies, bibendum egestas mi. In tellus turpis, mollis vitae sodales sed, ornare at velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam dapibus ultricies ultricies. Nunc vel erat nulla. Etiam suscipit ipsum ante, eu semper tortor rhoncus ut. Sed faucibus mi a nibh placerat, at tempus mi imperdiet. Aliquam lobortis, justo ac malesuada imperdiet, orci nulla tempus nibh, et varius eros ex quis sapien. Sed eget enim eu arcu lacinia aliquam. Fusce sit amet volutpat sapien, eleifend ornare ante. Pellentesque vulputate non magna et malesuada.</p>\n', 57, '2016-02-20 15:39:30', 'Lorem Ipsum'),
(3, '2016-04-13 11:00:00', 'bibendum egestas mi. In tellus turpis, mollis vitae sodales sed, ornare at velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam dapibus ultricies ultricies. Nunc vel erat nulla. Etiam suscipit ipsum ante, eu', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse convallis luctus nisl. Ut dictum metus venenatis lectus suscipit volutpat. Pellentesque porttitor, urna ac dictum porta, leo arcu consectetur enim, in molestie nibh dolor id nisi. Aenean purus neque, imperdiet eu porta et, vehicula quis purus. Morbi porttitor fringilla pretium. Donec rutrum nunc eget quam venenatis efficitur. Phasellus nec tincidunt magna.</p>\n\n<p>Praesent magna dui, ornare quis mauris ultricies, bibendum egestas mi. In tellus turpis, mollis vitae sodales sed, ornare at velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam dapibus ultricies ultricies. Nunc vel erat nulla. Etiam suscipit ipsum ante, eu semper tortor rhoncus ut. Sed faucibus mi a nibh placerat, at tempus mi imperdiet. Aliquam lobortis, justo ac malesuada imperdiet, orci nulla tempus nibh, et varius eros ex quis sapien. Sed eget enim eu arcu lacinia aliquam. Fusce sit amet volutpat sapien, eleifend ornare ante. Pellentesque vulputate non magna et malesuada.</p>\n', 62, '2016-02-20 15:39:53', 'Lorem Ipsum'),
(4, '2016-08-09 11:00:00', 'Phasellus vitae felis ullamcorper, eleifend ante quis, congue turpis. Aliquam convallis porta ex, sit amet pellentesque felis convallis at. Nulla posuere id sapien id interdum. Sed non scelerisque leo. Suspendisse cursus, lacus nec maximus blandit, massa', '<p>Phasellus vitae felis ullamcorper, eleifend ante quis, congue turpis. Aliquam convallis porta ex, sit amet pellentesque felis convallis at. Nulla posuere id sapien id interdum. Sed non scelerisque leo. Suspendisse cursus, lacus nec maximus blandit, massa eros molestie ex, vel gravida metus orci vitae tortor. Suspendisse sed nunc feugiat, suscipit lorem vitae, laoreet diam. Quisque vel scelerisque nisi, eu lacinia erat. Vivamus a diam felis. Duis elementum tempus elementum.</p>\n\n<p>Sed massa tellus, vulputate quis eros varius, viverra pretium nunc. Aliquam elit magna, vulputate vel eleifend id, placerat et quam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer mattis ante vitae lectus euismod, quis malesuada libero hendrerit. Fusce maximus augue massa, malesuada cursus elit scelerisque non. Nullam consequat varius mollis. Maecenas fermentum faucibus dolor, at blandit metus placerat non. Fusce urna ligula, pulvinar vitae bibendum vitae, hendrerit eget magna. Sed vehicula, libero sed laoreet viverra, lacus nibh suscipit justo, ac gravida nisi magna quis orci. Vestibulum cursus, orci ut laoreet ornare, dui ipsum sagittis nisl, at fringilla libero ante non tellus.</p>\n\n<p>Proin sagittis, felis ut dapibus hendrerit, ligula lacus consequat erat, et aliquet erat est ac felis. Pellentesque nec condimentum nisl, et scelerisque libero. Sed est nulla, molestie et lorem sed, accumsan volutpat ex. Quisque varius libero eu volutpat consectetur. Nulla facilisi. Proin laoreet aliquam turpis nec imperdiet. Sed consequat ligula et justo venenatis egestas non vulputate dui. Nunc in consequat urna, id gravida lorem. Ut placerat leo ante, et efficitur magna faucibus imperdiet.</p>\n', 60, '2016-02-20 15:40:14', 'Lorem Ipsum');

-- --------------------------------------------------------

--
-- Structure de la table `flashs`
--

CREATE TABLE IF NOT EXISTS `flashs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `resume` text NOT NULL,
  `dateAjout` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `flashs`
--

INSERT INTO `flashs` (`id`, `titre`, `contenu`, `resume`, `dateAjout`) VALUES
(1, 'F1', '<p><span style="color:#FF0000">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit, libero eu mattis feugiat, nisi eros tincidunt ligula, tristique porttitor eros diam auctor massa. Quisque congue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudin. Pellentesque eleifend interdum porta. Sed iaculis, arcu non posuere blandit, tellus ligula imperd</span><strong><span style="color:#000000">iet augue, eget lacinia elit nibh vel turpis. Praesent cursus mattis mi lacinia malesuada. Suspendisse consectetur vulputate arcu nec dictum. Mauris eget egestas odio, ut maximus orci. Proin blandit eget sapien id mollis. Cras vitae augue euismod, egestas odio cursus, molestie neque. Vivamus sollicitudin turpis quis nulla rhoncus, at elementum nisl accumsan. Etiam interdum tincidunt urna, id lobortis enim tempor eu.</span></strong></p>\n\n<p><strong><span style="color:#000000">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit, libero eu mattis feugiat, nisi eros tincidunt ligula, tristique porttitor eros diam auctor massa. Quisque congue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudin. Pellentesque eleifend interdum porta. Sed iaculis, arcu non posuere blandit, tellus ligula imperdiet augue, e</span></strong><span style="color:#FF0000">get lacinia elit nibh vel turpis. Praesent cursus mattis mi lacinia malesuada. Suspendisse consectetur vulputate arcu nec dictum. Mauris eget egestas odio, ut maximus orci. Proin blandit eget sapien id mollis. Cras vitae augue euismod, egestas odio cursus, molestie neque. Vivamus sollicitudin turpis quis nulla rhoncus, at elementum nisl accumsan. Etiam interdum tincidunt urna, id lobortis enim tempor eu.</span></p>\n\n<p>&nbsp;</p>\n\n<p><span style="color:#FF0000">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit, libero eu mattis feugiat, nisi eros tincidunt ligula, tristique porttitor eros diam auctor massa. Quisque congue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudin. Pellentesque eleifend interdum porta. Sed iaculis, arcu non posuere blandit, tellus ligula imperdiet augue, eget lacinia elit nibh vel turpis. Praesent cursus mattis mi lacinia malesuada. Suspendisse consectetur vulputate arcu nec dictum. Mauris eget egestas odio, ut maximus orci. Proin blandit eget sapien id mollis. Cras vitae augue euismod, egestas odio cursus, molestie neque. Vivamus sollicitudin turpis quis nulla rhoncus, at elementum nisl accumsan. Etiam interdum tincidunt urna, id lobortis enim tempor eu.</span></p>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit, libero eu mattis feugiat, nisi eros tincidunt ligula, tristique porttitor eros diam auctor massa. Quisque congue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudin', '2016-02-18 14:00:15'),
(2, 'F2', '<p>amgue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudinamgue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudinamgue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudinamgue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudinamgue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudinamgue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudinamgue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudinamgue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudinamgue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudinamgue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudinamgue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudinamgue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudinamgue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudinamgue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudinamgue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudinamgue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudinamgue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudinamgue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudinamgue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudinamgue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudinamgue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudinamgue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudinamgue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudinamgue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudinamgue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudinamgue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudinamgue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudinamgue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudin</p>', 'amgue maximus malesuada. Suspendisse malesuada augue eget semper sollicitudin', '2016-02-18 14:00:33'),
(3, 'F3', '<p>amgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Suspamgue maximus malesuada. Susp</p>', 'endisse malesuada augue eget semper sollicitudin', '2016-02-18 14:00:45'),
(5, 'test', '<p>test</p>', 'test', '2016-02-19 09:58:05');

-- --------------------------------------------------------

--
-- Structure de la table `medias`
--

CREATE TABLE IF NOT EXISTS `medias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(30) NOT NULL,
  `rep` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `idLiaison` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Contenu de la table `medias`
--

INSERT INTO `medias` (`id`, `type`, `rep`, `filename`, `idLiaison`) VALUES
(13, 'photos', 'phototheque/test', '56c4c9707138b.png', 21),
(14, 'photos', 'phototheque/test', '56c4c970d8376.png', 21),
(15, 'photos', 'phototheque/test', '56c4c9712a03c.png', 21),
(16, 'photos', 'phototheque/test', '56c4c97173fb2.png', 21),
(17, 'photos', 'phototheque/test', '56c4c971b59e6.png', 21),
(18, 'photos', 'phototheque/test', '56c4c972365bc.png', 21),
(19, 'photos', 'phototheque/test', '56c4c97279f23.png', 21),
(20, 'photos', 'phototheque/test', '56c4c972b5586.png', 21),
(21, 'photos', 'phototheque/test', '56c55e80e8a4c.png', 21),
(22, 'photos', 'phototheque/test', '56c55e814193f.png', 21),
(23, 'photos', 'phototheque/test', '56c55e8186644.png', 21),
(24, 'photos', 'phototheque/test', '56c55e81b67c0.png', 21),
(25, 'photos', 'phototheque/test', '56c55e81e4bb5.png', 21),
(26, 'photos', 'phototheque/test', '56c55e821ad0a.png', 21);

-- --------------------------------------------------------

--
-- Structure de la table `modules`
--

CREATE TABLE IF NOT EXISTS `modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `idPage` int(11) NOT NULL,
  `position` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `modules`
--

INSERT INTO `modules` (`id`, `nom`, `type`, `idPage`, `position`) VALUES
(10, 'Diaporama Accueil', 'diaporama', 1, 'HEADER'),
(12, 'Téléchargement de document', 'blocdownload', 1, 'COL_LEFT_TWO');

-- --------------------------------------------------------

--
-- Structure de la table `newsletteremail`
--

CREATE TABLE IF NOT EXISTS `newsletteremail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `idTheme` int(11) NOT NULL,
  `idAuteur` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `description` text NOT NULL,
  `motsclefs` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Contenu de la table `pages`
--

INSERT INTO `pages` (`id`, `Nom`, `titre`, `type`, `idTheme`, `idAuteur`, `date`, `description`, `motsclefs`, `url`) VALUES
(1, 'Accueil', 'Ville de buzancais : Site officiel', 1, 1, 1, '2016-02-16 09:32:48', 'Accéder au site officiel de la ville \nde Buzançais et découvrez ses infrastructures, ses services, son \npatrimoine et son actualité', 'buzançais,ville de  buzançais,mairie,buzancais, buzancays,36,indre,région centre,  présentation,information,actualités,services,découverte,tourisme,patrimoine,culture,évènement,pêche,étang,visiter,camping,hôtels,restaurants,entreprises,associations', 'accueil'),
(2, 'Decouvrir Buzancais', 'Ville de buzancais : Découvrir Buzancais', 2, 1, 1, '2016-02-16 11:10:21', 'Accéder au site officiel de la ville \nde Buzançais et découvrez ses infrastructures, ses services, son \npatrimoine et son actualité', 'buzançais,ville de  buzançais,mairie,buzancais,buzancays,36,indre,région centre,  présentation,information,actualités,services,découverte,tourisme,patrimoine,culture,évènement,pêche,étang,visiter,camping,hôtels,restaurants,entreprises,associations', 'decouvrir-buzancais'),
(3, 'Actualites du site', 'Ville de buzancais : Nos Actualités', 3, 1, 1, '2016-02-16 11:21:32', 'Accéder au site officiel de la ville de Buzançais et découvrez ses infrastructures, ses services, son patrimoine et son actualité', 'buzançais,ville de  buzançais,mairie,buzancais, buzancays,36,indre,région centre,  présentation,information,actualités,services,découverte,tourisme,patrimoine,culture,évènement,pêche,étang,visiter,camping,hôtels,restaurants,entreprises,associations', 'actualites-du-site'),
(4, 'Contactez-nous', 'Ville de buzancais : Contactez-nous', 4, 1, 1, '2016-02-16 11:22:04', 'Accéder au site officiel de la ville \nde Buzançais et découvrez ses infrastructures, ses services, son \npatrimoine et son actualité', 'buzançais,ville de  buzançais,mairie,buzancais, buzancays,36,indre,région centre,  présentation,information,actualités,services,découverte,tourisme,patrimoine,culture,évènement,pêche,étang,visiter,camping,hôtels,restaurants,entreprises,associations', 'contactez-nous');

-- --------------------------------------------------------

--
-- Structure de la table `sliderhome`
--

CREATE TABLE IF NOT EXISTS `sliderhome` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `lien` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `sociaux`
--

CREATE TABLE IF NOT EXISTS `sociaux` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lien` varchar(255) NOT NULL,
  `texte` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `sociaux`
--

INSERT INTO `sociaux` (`id`, `lien`, `texte`, `nom`) VALUES
(1, 'https://www.facebook.com/Ville-de-Buzan%C3%A7ais-1489526317967579/', 'textelien', 'Facebook'),
(2, 'g+lien', 'g+texte', 'Google +'),
(3, 'tweeterlien', 'tweeterltexte', 'Tweeter');

-- --------------------------------------------------------

--
-- Structure de la table `statistiques`
--

CREATE TABLE IF NOT EXISTS `statistiques` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idPage` int(11) NOT NULL,
  `ipuser` varchar(15) NOT NULL,
  `datevisite` datetime NOT NULL,
  `navigateur` varchar(100) NOT NULL,
  `uri` varchar(100) NOT NULL,
  `pagename` varchar(25) NOT NULL,
  `platform` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=531 ;

--
-- Contenu de la table `statistiques`
--

INSERT INTO `statistiques` (`id`, `idPage`, `ipuser`, `datevisite`, `navigateur`, `uri`, `pagename`, `platform`) VALUES
(1, 0, '127.0.0.1', '2016-02-20 14:13:02', 'Chrome', '/2016/', '1', 'Windows'),
(2, 1, '127.0.0.1', '2016-02-20 14:13:43', 'Chrome', '/2016/', 'accueil', 'Windows'),
(3, 1, '127.0.0.1', '2016-02-20 14:15:10', 'Chrome', '/2016/', 'accueil', 'Windows'),
(4, 1, '127.0.0.1', '2016-02-20 14:15:38', 'Chrome', '/2016/index.php?p=recherche', 'accueil', 'Windows'),
(5, 1, '127.0.0.1', '2016-02-20 14:15:57', 'Chrome', '/2016/index.php?p=recherche', 'accueil', 'Windows'),
(6, 1, '127.0.0.1', '2016-02-20 14:16:44', 'Chrome', '/2016/index.php?p=recherche', 'accueil', 'Windows'),
(7, 1, '127.0.0.1', '2016-02-20 14:17:08', 'Chrome', '/2016/index.php?p=recherche', 'accueil', 'Windows'),
(8, 1, '127.0.0.1', '2016-02-20 14:17:32', 'Chrome', '/2016/index.php/recherche', 'accueil', 'Windows'),
(9, 1, '127.0.0.1', '2016-02-20 14:17:52', 'Chrome', '/2016/index.php/recherche', 'accueil', 'Windows'),
(10, 1, '127.0.0.1', '2016-02-20 14:18:14', 'Chrome', '/2016/index.php/recherche', 'accueil', 'Windows'),
(11, 0, '127.0.0.1', '2016-02-20 14:21:45', 'Chrome', '/2016/index.php/recherche', 'recherche', 'Windows'),
(12, 0, '127.0.0.1', '2016-02-20 14:21:48', 'Chrome', '/2016/index.php/recherche', 'recherche', 'Windows'),
(13, 0, '127.0.0.1', '2016-02-20 14:21:51', 'Chrome', '/2016/index.php/recherche', 'recherche', 'Windows'),
(14, 0, '127.0.0.1', '2016-02-20 14:26:38', 'Chrome', '/2016/index.php/recherche', 'recherche', 'Windows'),
(15, 0, '127.0.0.1', '2016-02-20 14:27:40', 'Chrome', '/2016/index.php/recherche', 'recherche', 'Windows'),
(16, 0, '127.0.0.1', '2016-02-20 14:28:12', 'Chrome', '/2016/index.php/recherche', 'recherche', 'Windows'),
(17, 0, '127.0.0.1', '2016-02-20 14:28:27', 'Chrome', '/2016/index.php/recherche', 'recherche', 'Windows'),
(18, 0, '127.0.0.1', '2016-02-20 14:29:10', 'Chrome', '/2016/index.php/recherche', 'recherche', 'Windows'),
(19, 0, '127.0.0.1', '2016-02-20 14:29:26', 'Chrome', '/2016/index.php/recherche', 'recherche', 'Windows'),
(20, 0, '127.0.0.1', '2016-02-20 14:30:57', 'Chrome', '/2016/index.php/recherche', 'recherche', 'Windows'),
(21, 0, '127.0.0.1', '2016-02-20 14:31:13', 'Chrome', '/2016/index.php/recherche', 'recherche', 'Windows'),
(22, 0, '127.0.0.1', '2016-02-20 14:33:50', 'Chrome', '/2016/index.php/recherche', 'recherche', 'Windows'),
(23, 0, '127.0.0.1', '2016-02-20 14:34:02', 'Chrome', '/2016/index.php/recherche', 'recherche', 'Windows'),
(24, 0, '127.0.0.1', '2016-02-20 14:34:17', 'Chrome', '/2016/index.php/recherche', 'recherche', 'Windows'),
(25, 0, '127.0.0.1', '2016-02-20 14:39:04', 'Chrome', '/2016/index.php/recherche', 'recherche', 'Windows'),
(26, 0, '127.0.0.1', '2016-02-20 14:46:57', 'Chrome', '/2016/index.php/recherche', 'recherche', 'Windows'),
(27, 0, '127.0.0.1', '2016-02-20 14:47:14', 'Chrome', '/2016/index.php/recherche', 'recherche', 'Windows'),
(28, 0, '127.0.0.1', '2016-02-20 14:48:27', 'Chrome', '/2016/index.php/recherche', 'recherche', 'Windows'),
(29, 0, '127.0.0.1', '2016-02-20 14:48:33', 'Chrome', '/2016/index.php/recherche', 'recherche', 'Windows'),
(30, 0, '127.0.0.1', '2016-02-20 14:48:51', 'Chrome', '/2016/index.php/recherche', 'recherche', 'Windows'),
(31, 0, '127.0.0.1', '2016-02-20 14:49:17', 'Chrome', '/2016/index.php/recherche', 'recherche', 'Windows'),
(32, 0, '127.0.0.1', '2016-02-20 14:49:28', 'Chrome', '/2016/index.php/recherche', 'recherche', 'Windows'),
(33, 0, '127.0.0.1', '2016-02-20 14:50:37', 'Chrome', '/2016/index.php/recherche', 'recherche', 'Windows'),
(34, 1, '127.0.0.1', '2016-02-20 14:50:58', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(35, 1, '127.0.0.1', '2016-02-20 14:56:52', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(36, 1, '127.0.0.1', '2016-02-20 14:57:04', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(37, 1, '127.0.0.1', '2016-02-20 14:58:15', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(38, 1, '127.0.0.1', '2016-02-20 15:04:13', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(39, 1, '127.0.0.1', '2016-02-20 15:04:25', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(40, 1, '127.0.0.1', '2016-02-20 15:04:34', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(41, 1, '127.0.0.1', '2016-02-20 15:07:41', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(42, 1, '127.0.0.1', '2016-02-20 15:08:10', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(43, 1, '127.0.0.1', '2016-02-20 15:08:31', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(44, 1, '127.0.0.1', '2016-02-20 15:08:46', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(45, 1, '127.0.0.1', '2016-02-20 15:08:56', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(46, 1, '127.0.0.1', '2016-02-20 15:12:06', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(47, 1, '127.0.0.1', '2016-02-20 15:12:35', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(48, 1, '127.0.0.1', '2016-02-20 15:12:48', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(49, 1, '127.0.0.1', '2016-02-20 15:12:59', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(50, 1, '127.0.0.1', '2016-02-20 15:13:31', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(51, 1, '127.0.0.1', '2016-02-20 15:14:07', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(52, 1, '127.0.0.1', '2016-02-20 15:15:01', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(53, 1, '127.0.0.1', '2016-02-20 15:15:18', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(54, 1, '127.0.0.1', '2016-02-20 15:15:25', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(55, 1, '127.0.0.1', '2016-02-20 15:15:34', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(56, 1, '127.0.0.1', '2016-02-20 15:15:41', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(57, 1, '127.0.0.1', '2016-02-20 15:15:50', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(58, 1, '127.0.0.1', '2016-02-20 15:31:39', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(59, 1, '127.0.0.1', '2016-02-20 15:34:24', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(60, 1, '127.0.0.1', '2016-02-20 15:42:43', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(61, 1, '127.0.0.1', '2016-02-20 15:43:25', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(62, 1, '127.0.0.1', '2016-02-20 15:51:57', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(63, 1, '127.0.0.1', '2016-02-20 15:53:08', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(64, 1, '127.0.0.1', '2016-02-20 15:53:27', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(65, 1, '127.0.0.1', '2016-02-20 15:54:17', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(66, 1, '127.0.0.1', '2016-02-20 15:54:54', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(67, 1, '127.0.0.1', '2016-02-20 15:55:10', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(68, 1, '127.0.0.1', '2016-02-20 15:56:17', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(69, 1, '127.0.0.1', '2016-02-20 15:56:30', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(70, 1, '127.0.0.1', '2016-02-20 16:02:15', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(71, 1, '127.0.0.1', '2016-02-20 16:04:26', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(72, 1, '127.0.0.1', '2016-02-20 16:05:17', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(73, 1, '127.0.0.1', '2016-02-20 16:05:33', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(74, 1, '127.0.0.1', '2016-02-20 16:06:01', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(75, 1, '127.0.0.1', '2016-02-20 16:06:22', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(76, 1, '127.0.0.1', '2016-02-20 16:06:29', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(77, 1, '127.0.0.1', '2016-02-20 16:07:38', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(78, 1, '127.0.0.1', '2016-02-20 16:09:00', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(79, 1, '127.0.0.1', '2016-02-20 16:09:19', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(80, 1, '127.0.0.1', '2016-02-20 16:09:31', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(81, 1, '127.0.0.1', '2016-02-20 16:09:47', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(82, 1, '127.0.0.1', '2016-02-20 16:10:27', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(83, 1, '127.0.0.1', '2016-02-20 16:11:59', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(84, 1, '127.0.0.1', '2016-02-20 16:12:46', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(85, 1, '127.0.0.1', '2016-02-20 16:12:57', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(86, 1, '127.0.0.1', '2016-02-20 16:13:08', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(87, 1, '127.0.0.1', '2016-02-20 16:13:29', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(88, 1, '127.0.0.1', '2016-02-20 16:13:44', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(89, 1, '127.0.0.1', '2016-02-20 16:13:57', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(90, 1, '127.0.0.1', '2016-02-20 16:14:19', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(91, 1, '127.0.0.1', '2016-02-20 16:14:36', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(92, 1, '127.0.0.1', '2016-02-20 16:14:54', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(93, 1, '127.0.0.1', '2016-02-20 16:16:04', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(94, 1, '127.0.0.1', '2016-02-20 16:16:53', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(95, 1, '127.0.0.1', '2016-02-20 16:17:14', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(96, 1, '127.0.0.1', '2016-02-20 16:18:13', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(97, 1, '127.0.0.1', '2016-02-20 16:18:15', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(98, 1, '127.0.0.1', '2016-02-20 16:18:26', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(99, 1, '127.0.0.1', '2016-02-20 16:18:38', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(100, 1, '127.0.0.1', '2016-02-20 16:19:03', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(101, 1, '127.0.0.1', '2016-02-20 16:19:18', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(102, 1, '127.0.0.1', '2016-02-20 16:19:35', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(103, 1, '127.0.0.1', '2016-02-20 16:19:53', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(104, 1, '127.0.0.1', '2016-02-20 16:20:40', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(105, 1, '127.0.0.1', '2016-02-20 16:21:03', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(106, 1, '127.0.0.1', '2016-02-20 16:51:50', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(107, 1, '127.0.0.1', '2016-02-20 16:52:14', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(108, 1, '127.0.0.1', '2016-02-20 16:52:40', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(109, 1, '127.0.0.1', '2016-02-20 16:53:16', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(110, 1, '127.0.0.1', '2016-02-20 16:55:27', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(111, 1, '127.0.0.1', '2016-02-20 16:56:26', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(112, 1, '127.0.0.1', '2016-02-20 16:56:53', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(113, 1, '127.0.0.1', '2016-02-20 16:57:36', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(114, 1, '127.0.0.1', '2016-02-20 16:59:30', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(115, 1, '127.0.0.1', '2016-02-20 16:59:31', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(116, 1, '127.0.0.1', '2016-02-20 17:00:00', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(117, 1, '127.0.0.1', '2016-02-20 17:01:03', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(118, 1, '127.0.0.1', '2016-02-20 17:03:20', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(119, 1, '127.0.0.1', '2016-02-20 17:03:35', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(120, 1, '127.0.0.1', '2016-02-20 17:05:08', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(121, 1, '127.0.0.1', '2016-02-20 17:06:24', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(122, 1, '127.0.0.1', '2016-02-20 17:08:11', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(123, 1, '127.0.0.1', '2016-02-20 17:08:21', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(124, 1, '127.0.0.1', '2016-02-20 17:16:41', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(125, 1, '127.0.0.1', '2016-02-20 17:17:16', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(126, 1, '127.0.0.1', '2016-02-20 17:17:35', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(127, 1, '127.0.0.1', '2016-02-20 17:17:57', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(128, 1, '127.0.0.1', '2016-02-20 17:20:06', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(129, 1, '127.0.0.1', '2016-02-20 17:20:35', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(130, 1, '127.0.0.1', '2016-02-20 17:21:46', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(131, 1, '127.0.0.1', '2016-02-20 17:21:59', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(132, 1, '127.0.0.1', '2016-02-20 17:23:25', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(133, 1, '127.0.0.1', '2016-02-20 17:23:51', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(134, 1, '127.0.0.1', '2016-02-20 17:27:37', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(135, 1, '127.0.0.1', '2016-02-20 17:29:51', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(136, 1, '127.0.0.1', '2016-02-20 17:31:05', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(137, 1, '127.0.0.1', '2016-02-20 17:31:18', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(138, 1, '127.0.0.1', '2016-02-20 17:31:44', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(139, 1, '127.0.0.1', '2016-02-20 17:32:04', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(140, 1, '127.0.0.1', '2016-02-20 17:34:11', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(141, 1, '127.0.0.1', '2016-02-20 17:35:58', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(142, 1, '127.0.0.1', '2016-02-20 17:36:20', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(143, 1, '127.0.0.1', '2016-02-20 17:38:54', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(144, 1, '127.0.0.1', '2016-02-20 17:39:24', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(145, 1, '127.0.0.1', '2016-02-20 17:40:13', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(146, 1, '127.0.0.1', '2016-02-20 17:40:29', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(147, 1, '127.0.0.1', '2016-02-20 17:41:45', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(148, 1, '127.0.0.1', '2016-02-20 17:42:53', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(149, 1, '127.0.0.1', '2016-02-20 17:44:26', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(150, 1, '127.0.0.1', '2016-02-20 17:45:33', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(151, 1, '127.0.0.1', '2016-02-20 17:51:11', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(152, 1, '127.0.0.1', '2016-02-20 17:51:28', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(153, 1, '127.0.0.1', '2016-02-20 17:51:37', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(154, 1, '127.0.0.1', '2016-02-20 17:52:11', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(155, 1, '127.0.0.1', '2016-02-20 17:52:28', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(156, 1, '127.0.0.1', '2016-02-20 17:52:52', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(157, 1, '127.0.0.1', '2016-02-20 17:52:54', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(158, 1, '127.0.0.1', '2016-02-20 17:54:06', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(159, 1, '127.0.0.1', '2016-02-20 17:54:24', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(160, 1, '127.0.0.1', '2016-02-20 17:54:31', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(161, 1, '127.0.0.1', '2016-02-20 17:54:40', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(162, 1, '127.0.0.1', '2016-02-20 17:55:16', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(163, 1, '127.0.0.1', '2016-02-20 17:55:18', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(164, 1, '127.0.0.1', '2016-02-20 17:55:28', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(165, 1, '127.0.0.1', '2016-02-20 17:56:53', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(166, 1, '127.0.0.1', '2016-02-20 17:56:59', 'Chrome', '/2016/', 'accueil', 'Windows'),
(167, 0, '127.0.0.1', '2016-02-20 18:00:58', 'Chrome', '/2016/index.html', 'index.html', 'Windows'),
(168, 1, '127.0.0.1', '2016-02-20 18:01:06', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(169, 0, '127.0.0.1', '2016-02-20 18:01:11', 'Chrome', '/2016/agenda', 'agenda', 'Windows'),
(170, 0, '127.0.0.1', '2016-02-20 18:01:37', 'Chrome', '/2016/agenda.html', 'agenda.html', 'Windows'),
(171, 0, '127.0.0.1', '2016-02-20 18:02:07', 'Chrome', '/2016/agenda.html', 'agenda.html', 'Windows'),
(172, 0, '127.0.0.1', '2016-02-20 18:02:27', 'Chrome', '/2016/agenda.html', 'agenda.html', 'Windows'),
(173, 0, '127.0.0.1', '2016-02-20 18:02:31', 'Chrome', '/2016/index.html', 'index.html', 'Windows'),
(174, 0, '127.0.0.1', '2016-02-20 18:03:00', 'Chrome', '/2016/index.html', 'index.html', 'Windows'),
(175, 0, '127.0.0.1', '2016-02-20 18:03:14', 'Chrome', '/2016/index.html', 'index.html', 'Windows'),
(176, 1, '127.0.0.1', '2016-02-20 18:03:37', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(177, 0, '127.0.0.1', '2016-02-20 18:03:42', 'Chrome', '/2016/agenda.html', 'agenda', 'Windows'),
(178, 0, '127.0.0.1', '2016-02-20 18:04:21', 'Chrome', '/2016/agenda.html', 'agenda', 'Windows'),
(179, 1, '127.0.0.1', '2016-02-20 18:04:24', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(180, 1, '127.0.0.1', '2016-02-20 18:13:43', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(181, 1, '127.0.0.1', '2016-02-20 18:14:05', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(182, 1, '127.0.0.1', '2016-02-20 18:14:45', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(183, 1, '127.0.0.1', '2016-02-20 18:15:03', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(184, 1, '127.0.0.1', '2016-02-20 18:15:30', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(185, 1, '127.0.0.1', '2016-02-20 18:17:56', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(186, 1, '127.0.0.1', '2016-02-20 18:20:28', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(187, 1, '127.0.0.1', '2016-02-20 18:25:44', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(188, 1, '127.0.0.1', '2016-02-20 18:26:13', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(189, 1, '127.0.0.1', '2016-02-20 18:29:30', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(190, 1, '127.0.0.1', '2016-02-20 18:30:09', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(191, 1, '127.0.0.1', '2016-02-20 18:30:54', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(192, 1, '127.0.0.1', '2016-02-20 18:31:31', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(193, 1, '127.0.0.1', '2016-02-20 18:57:05', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(194, 1, '127.0.0.1', '2016-02-20 18:59:25', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(195, 1, '127.0.0.1', '2016-02-20 19:10:54', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(196, 1, '127.0.0.1', '2016-02-20 19:11:07', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(197, 1, '127.0.0.1', '2016-02-20 19:11:20', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(198, 1, '127.0.0.1', '2016-02-20 19:11:32', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(199, 1, '127.0.0.1', '2016-02-20 19:12:26', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(200, 1, '127.0.0.1', '2016-02-20 19:12:54', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(201, 1, '127.0.0.1', '2016-02-20 19:13:13', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(202, 1, '127.0.0.1', '2016-02-20 19:14:41', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(203, 1, '127.0.0.1', '2016-02-20 19:15:30', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(204, 1, '127.0.0.1', '2016-02-20 19:16:10', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(205, 1, '127.0.0.1', '2016-02-20 19:16:29', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(206, 1, '127.0.0.1', '2016-02-20 19:16:51', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(207, 1, '127.0.0.1', '2016-02-20 19:17:00', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(208, 1, '127.0.0.1', '2016-02-20 19:17:49', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(209, 1, '127.0.0.1', '2016-02-20 19:18:07', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(210, 1, '127.0.0.1', '2016-02-20 19:18:19', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(211, 1, '127.0.0.1', '2016-02-20 19:18:33', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(212, 1, '127.0.0.1', '2016-02-20 19:19:48', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(213, 1, '127.0.0.1', '2016-02-20 19:19:50', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(214, 1, '127.0.0.1', '2016-02-20 19:20:51', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(215, 1, '127.0.0.1', '2016-02-20 19:21:25', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(216, 1, '127.0.0.1', '2016-02-20 19:21:59', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(217, 1, '127.0.0.1', '2016-02-20 19:22:40', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(218, 1, '127.0.0.1', '2016-02-20 19:22:55', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(219, 1, '127.0.0.1', '2016-02-20 19:23:36', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(220, 1, '127.0.0.1', '2016-02-20 19:26:26', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(221, 1, '127.0.0.1', '2016-02-20 19:27:00', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(222, 1, '127.0.0.1', '2016-02-20 19:29:30', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(223, 1, '127.0.0.1', '2016-02-20 19:30:09', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(224, 1, '127.0.0.1', '2016-02-20 19:30:33', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(225, 1, '127.0.0.1', '2016-02-20 19:31:59', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(226, 1, '127.0.0.1', '2016-02-20 19:32:05', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(227, 1, '127.0.0.1', '2016-02-20 19:32:47', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(228, 1, '127.0.0.1', '2016-02-20 19:33:19', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(229, 1, '127.0.0.1', '2016-02-20 19:33:29', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(230, 1, '127.0.0.1', '2016-02-20 19:33:44', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(231, 1, '127.0.0.1', '2016-02-20 19:33:53', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(232, 1, '127.0.0.1', '2016-02-20 19:34:03', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(233, 1, '127.0.0.1', '2016-02-20 19:40:41', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(234, 1, '127.0.0.1', '2016-02-20 19:41:07', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(235, 1, '127.0.0.1', '2016-02-20 19:41:21', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(236, 1, '127.0.0.1', '2016-02-20 19:42:51', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(237, 1, '127.0.0.1', '2016-02-20 19:44:13', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(238, 1, '127.0.0.1', '2016-02-20 19:45:24', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(239, 1, '127.0.0.1', '2016-02-20 19:45:49', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(240, 1, '127.0.0.1', '2016-02-20 19:46:56', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(241, 1, '127.0.0.1', '2016-02-20 19:47:31', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(242, 1, '127.0.0.1', '2016-02-20 19:47:52', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(243, 1, '127.0.0.1', '2016-02-20 19:48:10', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(244, 1, '127.0.0.1', '2016-02-20 19:50:35', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(245, 1, '127.0.0.1', '2016-02-20 19:50:53', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(246, 1, '127.0.0.1', '2016-02-20 19:50:59', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(247, 1, '127.0.0.1', '2016-02-20 19:51:55', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(248, 1, '127.0.0.1', '2016-02-20 19:52:43', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(249, 1, '127.0.0.1', '2016-02-20 19:53:22', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(250, 1, '127.0.0.1', '2016-02-20 19:55:07', 'Chrome', '/2016/index.html', 'accueil', 'Windows'),
(251, 1, '127.0.0.1', '2016-02-20 20:32:17', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(252, 1, '127.0.0.1', '2016-02-20 20:32:53', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(253, 1, '127.0.0.1', '2016-02-20 20:33:42', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(254, 1, '127.0.0.1', '2016-02-20 20:34:33', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(255, 1, '127.0.0.1', '2016-02-20 20:35:32', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(256, 1, '127.0.0.1', '2016-02-20 20:36:18', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(257, 1, '127.0.0.1', '2016-02-20 20:46:11', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(258, 1, '127.0.0.1', '2016-02-20 20:46:27', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(259, 1, '127.0.0.1', '2016-02-20 20:47:12', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(260, 1, '127.0.0.1', '2016-02-20 20:50:43', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(261, 1, '127.0.0.1', '2016-02-20 20:51:37', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(262, 1, '127.0.0.1', '2016-02-20 20:53:03', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(263, 1, '127.0.0.1', '2016-02-20 20:53:24', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(264, 1, '127.0.0.1', '2016-02-20 20:54:18', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(265, 1, '127.0.0.1', '2016-02-20 20:54:26', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(266, 1, '127.0.0.1', '2016-02-20 20:54:40', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(267, 1, '127.0.0.1', '2016-02-20 20:55:47', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(268, 1, '127.0.0.1', '2016-02-20 20:56:23', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(269, 1, '127.0.0.1', '2016-02-20 20:58:00', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(270, 1, '127.0.0.1', '2016-02-20 20:59:33', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(271, 1, '127.0.0.1', '2016-02-20 21:05:59', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(272, 1, '127.0.0.1', '2016-02-20 21:17:15', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(273, 1, '127.0.0.1', '2016-02-20 21:17:49', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(274, 1, '127.0.0.1', '2016-02-20 21:24:22', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(275, 1, '127.0.0.1', '2016-02-20 21:25:05', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(276, 1, '127.0.0.1', '2016-02-20 21:26:14', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(277, 1, '127.0.0.1', '2016-02-20 21:26:57', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(278, 1, '127.0.0.1', '2016-02-20 21:27:33', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(279, 1, '127.0.0.1', '2016-02-20 23:22:47', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(280, 1, '127.0.0.1', '2016-02-20 23:23:42', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(281, 1, '127.0.0.1', '2016-02-20 23:24:52', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(282, 1, '127.0.0.1', '2016-02-20 23:35:11', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(283, 1, '127.0.0.1', '2016-02-20 23:35:51', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(284, 1, '127.0.0.1', '2016-02-20 23:36:10', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(285, 1, '127.0.0.1', '2016-02-20 23:36:32', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(286, 1, '127.0.0.1', '2016-02-20 23:36:48', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(287, 1, '127.0.0.1', '2016-02-20 23:37:08', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(288, 1, '127.0.0.1', '2016-02-20 23:38:33', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(289, 1, '127.0.0.1', '2016-02-20 23:38:56', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(290, 1, '127.0.0.1', '2016-02-20 23:39:04', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(291, 1, '127.0.0.1', '2016-02-20 23:39:14', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(292, 1, '127.0.0.1', '2016-02-20 23:39:45', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(293, 1, '127.0.0.1', '2016-02-20 23:41:49', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(294, 1, '127.0.0.1', '2016-02-20 23:42:26', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(295, 1, '127.0.0.1', '2016-02-20 23:45:41', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(296, 1, '127.0.0.1', '2016-02-20 23:50:26', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(297, 1, '127.0.0.1', '2016-02-20 23:51:05', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(298, 1, '127.0.0.1', '2016-02-20 23:58:01', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(299, 1, '127.0.0.1', '2016-02-20 23:59:44', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(300, 1, '127.0.0.1', '2016-02-21 00:00:08', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(301, 1, '127.0.0.1', '2016-02-21 00:00:34', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(302, 1, '127.0.0.1', '2016-02-21 00:00:46', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(303, 1, '127.0.0.1', '2016-02-21 00:02:31', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(304, 1, '127.0.0.1', '2016-02-21 00:03:01', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(305, 1, '127.0.0.1', '2016-02-21 00:03:54', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(306, 1, '127.0.0.1', '2016-02-21 00:04:36', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(307, 1, '127.0.0.1', '2016-02-21 00:04:47', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(308, 1, '127.0.0.1', '2016-02-21 00:04:59', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(309, 1, '127.0.0.1', '2016-02-21 00:06:50', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(310, 1, '127.0.0.1', '2016-02-21 00:07:41', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(311, 1, '127.0.0.1', '2016-02-21 00:07:54', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(312, 1, '127.0.0.1', '2016-02-21 00:10:11', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(313, 1, '127.0.0.1', '2016-02-21 00:12:45', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(314, 1, '127.0.0.1', '2016-02-21 00:14:00', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(315, 1, '127.0.0.1', '2016-02-21 00:14:06', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(316, 1, '127.0.0.1', '2016-02-21 00:14:56', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(317, 1, '127.0.0.1', '2016-02-21 00:14:56', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(318, 1, '127.0.0.1', '2016-02-21 00:29:50', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(319, 1, '127.0.0.1', '2016-02-21 00:31:49', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(320, 1, '127.0.0.1', '2016-02-21 00:32:35', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(321, 1, '127.0.0.1', '2016-02-21 00:33:20', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(322, 1, '127.0.0.1', '2016-02-21 00:33:40', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(323, 1, '127.0.0.1', '2016-02-21 00:37:44', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(324, 1, '127.0.0.1', '2016-02-21 00:43:00', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(325, 1, '127.0.0.1', '2016-02-21 00:43:15', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(326, 1, '127.0.0.1', '2016-02-21 00:48:17', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(327, 1, '127.0.0.1', '2016-02-21 01:05:45', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(328, 1, '127.0.0.1', '2016-02-21 01:06:08', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(329, 1, '127.0.0.1', '2016-02-21 01:06:53', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(330, 1, '127.0.0.1', '2016-02-21 01:07:07', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(331, 1, '127.0.0.1', '2016-02-21 01:13:25', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(332, 1, '127.0.0.1', '2016-02-21 01:23:17', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(333, 1, '127.0.0.1', '2016-02-21 01:23:40', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(334, 1, '127.0.0.1', '2016-02-21 01:23:42', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(335, 1, '127.0.0.1', '2016-02-21 01:25:42', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(336, 1, '127.0.0.1', '2016-02-21 01:27:31', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(337, 1, '127.0.0.1', '2016-02-21 01:28:15', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(338, 1, '127.0.0.1', '2016-02-21 01:28:33', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(339, 1, '127.0.0.1', '2016-02-21 01:33:59', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(340, 1, '127.0.0.1', '2016-02-21 01:35:02', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(341, 1, '127.0.0.1', '2016-02-21 01:35:17', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(342, 1, '127.0.0.1', '2016-02-21 01:36:52', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(343, 1, '127.0.0.1', '2016-02-21 01:37:41', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(344, 1, '127.0.0.1', '2016-02-21 01:44:52', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(345, 1, '127.0.0.1', '2016-02-21 01:45:12', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(346, 1, '127.0.0.1', '2016-02-21 01:45:16', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(347, 1, '127.0.0.1', '2016-02-21 01:45:23', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(348, 1, '127.0.0.1', '2016-02-21 01:45:44', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(349, 1, '127.0.0.1', '2016-02-21 01:45:59', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(350, 1, '127.0.0.1', '2016-02-21 01:46:10', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(351, 1, '127.0.0.1', '2016-02-21 01:46:17', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(352, 1, '127.0.0.1', '2016-02-21 01:47:31', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(353, 1, '127.0.0.1', '2016-02-21 01:47:45', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(354, 1, '127.0.0.1', '2016-02-21 01:52:44', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(355, 1, '127.0.0.1', '2016-02-21 01:54:30', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(356, 1, '127.0.0.1', '2016-02-21 01:55:39', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(357, 1, '127.0.0.1', '2016-02-21 01:55:57', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(358, 1, '127.0.0.1', '2016-02-21 01:56:03', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(359, 1, '127.0.0.1', '2016-02-21 01:56:09', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(360, 1, '127.0.0.1', '2016-02-21 01:56:29', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(361, 1, '127.0.0.1', '2016-02-21 01:56:42', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(362, 1, '127.0.0.1', '2016-02-21 01:57:03', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(363, 1, '127.0.0.1', '2016-02-21 01:59:55', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(364, 1, '127.0.0.1', '2016-02-21 02:00:49', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(365, 1, '127.0.0.1', '2016-02-21 02:02:08', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(366, 1, '127.0.0.1', '2016-02-21 02:02:28', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(367, 1, '127.0.0.1', '2016-02-21 02:03:20', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(368, 1, '127.0.0.1', '2016-02-21 02:03:37', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(369, 1, '127.0.0.1', '2016-02-21 02:05:06', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(370, 1, '127.0.0.1', '2016-02-21 02:08:00', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(371, 1, '127.0.0.1', '2016-02-21 02:12:28', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(372, 1, '127.0.0.1', '2016-02-21 02:13:04', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(373, 1, '127.0.0.1', '2016-02-21 02:13:15', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(374, 1, '127.0.0.1', '2016-02-21 02:13:48', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(375, 1, '127.0.0.1', '2016-02-21 02:14:32', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(376, 1, '127.0.0.1', '2016-02-21 02:15:04', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(377, 1, '127.0.0.1', '2016-02-21 02:15:13', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(378, 1, '127.0.0.1', '2016-02-21 02:15:45', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(379, 1, '127.0.0.1', '2016-02-21 02:15:55', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(380, 1, '127.0.0.1', '2016-02-21 02:16:24', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(381, 1, '127.0.0.1', '2016-02-21 02:17:01', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(382, 1, '127.0.0.1', '2016-02-21 02:18:23', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(383, 1, '127.0.0.1', '2016-02-21 02:20:47', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(384, 1, '127.0.0.1', '2016-02-21 02:22:15', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(385, 1, '127.0.0.1', '2016-02-21 02:24:09', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(386, 1, '127.0.0.1', '2016-02-21 02:24:20', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(387, 1, '127.0.0.1', '2016-02-21 02:24:39', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(388, 1, '127.0.0.1', '2016-02-21 02:24:47', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(389, 1, '127.0.0.1', '2016-02-21 02:25:45', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(390, 1, '127.0.0.1', '2016-02-21 02:26:03', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(391, 1, '127.0.0.1', '2016-02-21 02:31:55', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(392, 1, '127.0.0.1', '2016-02-21 02:32:22', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(393, 1, '127.0.0.1', '2016-02-21 02:40:22', 'Chrome', '/2016/index.php', 'accueil', 'Windows'),
(394, 1, '127.0.0.1', '2016-02-21 10:04:47', 'Chrome', '/2016/', 'accueil', 'Windows'),
(395, 1, '127.0.0.1', '2016-02-21 10:05:13', 'Chrome', '/2016/', 'accueil', 'Windows'),
(396, 1, '127.0.0.1', '2016-02-21 10:13:08', 'Chrome', '/2016/', 'accueil', 'Windows'),
(397, 1, '127.0.0.1', '2016-02-21 10:13:24', 'Chrome', '/2016/', 'accueil', 'Windows'),
(398, 1, '127.0.0.1', '2016-02-21 10:19:32', 'Chrome', '/2016/', 'accueil', 'Windows'),
(399, 1, '127.0.0.1', '2016-02-21 10:20:05', 'Chrome', '/2016/', 'accueil', 'Windows'),
(400, 1, '127.0.0.1', '2016-02-21 10:20:14', 'Chrome', '/2016/', 'accueil', 'Windows'),
(401, 1, '127.0.0.1', '2016-02-21 10:20:21', 'Chrome', '/2016/', 'accueil', 'Windows'),
(402, 1, '127.0.0.1', '2016-02-21 10:22:07', 'Chrome', '/2016/', 'accueil', 'Windows'),
(403, 1, '127.0.0.1', '2016-02-21 10:24:51', 'Chrome', '/2016/', 'accueil', 'Windows'),
(404, 1, '127.0.0.1', '2016-02-21 10:25:04', 'Chrome', '/2016/', 'accueil', 'Windows'),
(405, 1, '127.0.0.1', '2016-02-21 10:25:26', 'Chrome', '/2016/', 'accueil', 'Windows'),
(406, 1, '127.0.0.1', '2016-02-21 10:25:34', 'Chrome', '/2016/', 'accueil', 'Windows'),
(407, 1, '127.0.0.1', '2016-02-21 10:26:20', 'Chrome', '/2016/', 'accueil', 'Windows'),
(408, 1, '127.0.0.1', '2016-02-21 10:26:34', 'Chrome', '/2016/', 'accueil', 'Windows'),
(409, 1, '127.0.0.1', '2016-02-21 10:27:04', 'Chrome', '/2016/', 'accueil', 'Windows'),
(410, 1, '127.0.0.1', '2016-02-21 10:27:22', 'Chrome', '/2016/', 'accueil', 'Windows'),
(411, 1, '127.0.0.1', '2016-02-21 10:28:22', 'Chrome', '/2016/', 'accueil', 'Windows'),
(412, 1, '127.0.0.1', '2016-02-21 10:31:27', 'Chrome', '/2016/', 'accueil', 'Windows'),
(413, 1, '127.0.0.1', '2016-02-21 10:33:18', 'Chrome', '/2016/', 'accueil', 'Windows'),
(414, 1, '127.0.0.1', '2016-02-21 10:33:46', 'Chrome', '/2016/', 'accueil', 'Windows'),
(415, 1, '127.0.0.1', '2016-02-21 10:35:55', 'Chrome', '/2016/', 'accueil', 'Windows'),
(416, 1, '127.0.0.1', '2016-02-21 10:36:16', 'Chrome', '/2016/', 'accueil', 'Windows'),
(417, 1, '127.0.0.1', '2016-02-21 10:37:20', 'Chrome', '/2016/', 'accueil', 'Windows'),
(418, 1, '127.0.0.1', '2016-02-21 10:39:18', 'Chrome', '/2016/', 'accueil', 'Windows'),
(419, 1, '127.0.0.1', '2016-02-21 10:39:44', 'Chrome', '/2016/', 'accueil', 'Windows'),
(420, 1, '127.0.0.1', '2016-02-21 10:40:00', 'Chrome', '/2016/', 'accueil', 'Windows'),
(421, 1, '127.0.0.1', '2016-02-21 10:40:32', 'Chrome', '/2016/', 'accueil', 'Windows'),
(422, 1, '127.0.0.1', '2016-02-21 10:42:29', 'Chrome', '/2016/', 'accueil', 'Windows'),
(423, 1, '127.0.0.1', '2016-02-21 10:43:11', 'Chrome', '/2016/', 'accueil', 'Windows'),
(424, 1, '127.0.0.1', '2016-02-21 10:44:16', 'Chrome', '/2016/', 'accueil', 'Windows'),
(425, 1, '127.0.0.1', '2016-02-21 10:44:38', 'Chrome', '/2016/', 'accueil', 'Windows'),
(426, 1, '127.0.0.1', '2016-02-21 10:45:34', 'Chrome', '/2016/', 'accueil', 'Windows'),
(427, 1, '127.0.0.1', '2016-02-21 10:46:13', 'Chrome', '/2016/', 'accueil', 'Windows'),
(428, 1, '127.0.0.1', '2016-02-21 10:46:42', 'Chrome', '/2016/', 'accueil', 'Windows'),
(429, 1, '127.0.0.1', '2016-02-21 10:47:16', 'Chrome', '/2016/', 'accueil', 'Windows'),
(430, 1, '127.0.0.1', '2016-02-21 10:48:17', 'Chrome', '/2016/', 'accueil', 'Windows'),
(431, 1, '127.0.0.1', '2016-02-21 10:49:00', 'Chrome', '/2016/', 'accueil', 'Windows'),
(432, 1, '127.0.0.1', '2016-02-21 10:50:07', 'Chrome', '/2016/', 'accueil', 'Windows'),
(433, 1, '127.0.0.1', '2016-02-21 11:02:04', 'Chrome', '/2016/', 'accueil', 'Windows'),
(434, 1, '127.0.0.1', '2016-02-21 11:03:14', 'Chrome', '/2016/', 'accueil', 'Windows'),
(435, 1, '127.0.0.1', '2016-02-21 11:04:41', 'Chrome', '/2016/', 'accueil', 'Windows'),
(436, 1, '127.0.0.1', '2016-02-21 11:05:54', 'Chrome', '/2016/', 'accueil', 'Windows'),
(437, 1, '127.0.0.1', '2016-02-21 11:06:13', 'Chrome', '/2016/', 'accueil', 'Windows'),
(438, 1, '127.0.0.1', '2016-02-21 11:06:31', 'Chrome', '/2016/', 'accueil', 'Windows'),
(439, 1, '127.0.0.1', '2016-02-21 11:07:28', 'Chrome', '/2016/', 'accueil', 'Windows'),
(440, 1, '127.0.0.1', '2016-02-21 11:07:41', 'Chrome', '/2016/', 'accueil', 'Windows'),
(441, 1, '127.0.0.1', '2016-02-21 11:08:13', 'Chrome', '/2016/', 'accueil', 'Windows'),
(442, 1, '127.0.0.1', '2016-02-21 11:08:25', 'Chrome', '/2016/', 'accueil', 'Windows'),
(443, 1, '127.0.0.1', '2016-02-21 11:10:18', 'Chrome', '/2016/', 'accueil', 'Windows'),
(444, 1, '127.0.0.1', '2016-02-21 11:12:27', 'Chrome', '/2016/', 'accueil', 'Windows'),
(445, 1, '127.0.0.1', '2016-02-21 11:12:43', 'Chrome', '/2016/', 'accueil', 'Windows'),
(446, 1, '127.0.0.1', '2016-02-21 11:13:20', 'Chrome', '/2016/', 'accueil', 'Windows'),
(447, 1, '127.0.0.1', '2016-02-21 11:14:05', 'Chrome', '/2016/', 'accueil', 'Windows'),
(448, 1, '127.0.0.1', '2016-02-21 11:18:41', 'Chrome', '/2016/', 'accueil', 'Windows'),
(449, 1, '127.0.0.1', '2016-02-21 11:19:34', 'Chrome', '/2016/', 'accueil', 'Windows'),
(450, 1, '127.0.0.1', '2016-02-21 11:20:30', 'Chrome', '/2016/', 'accueil', 'Windows'),
(451, 1, '127.0.0.1', '2016-02-21 11:20:41', 'Chrome', '/2016/', 'accueil', 'Windows'),
(452, 1, '127.0.0.1', '2016-02-21 11:21:19', 'Chrome', '/2016/', 'accueil', 'Windows'),
(453, 1, '127.0.0.1', '2016-02-21 11:21:37', 'Chrome', '/2016/', 'accueil', 'Windows'),
(454, 1, '127.0.0.1', '2016-02-21 11:38:04', 'Chrome', '/2016/', 'accueil', 'Windows'),
(455, 1, '127.0.0.1', '2016-02-21 11:38:12', 'Chrome', '/2016/', 'accueil', 'Windows'),
(456, 1, '127.0.0.1', '2016-02-21 11:38:31', 'Chrome', '/2016/', 'accueil', 'Windows'),
(457, 1, '127.0.0.1', '2016-02-21 11:38:47', 'Chrome', '/2016/', 'accueil', 'Windows'),
(458, 1, '127.0.0.1', '2016-02-21 11:38:55', 'Chrome', '/2016/', 'accueil', 'Windows'),
(459, 1, '127.0.0.1', '2016-02-21 11:40:33', 'Chrome', '/2016/', 'accueil', 'Windows'),
(460, 1, '127.0.0.1', '2016-02-21 11:40:41', 'Chrome', '/2016/', 'accueil', 'Windows'),
(461, 1, '127.0.0.1', '2016-02-21 11:40:46', 'Chrome', '/2016/', 'accueil', 'Windows'),
(462, 1, '127.0.0.1', '2016-02-21 11:42:15', 'Chrome', '/2016/', 'accueil', 'Windows'),
(463, 1, '127.0.0.1', '2016-02-21 11:42:40', 'Chrome', '/2016/', 'accueil', 'Windows'),
(464, 1, '127.0.0.1', '2016-02-21 11:43:05', 'Chrome', '/2016/', 'accueil', 'Windows'),
(465, 1, '127.0.0.1', '2016-02-21 11:45:06', 'Chrome', '/2016/', 'accueil', 'Windows'),
(466, 1, '127.0.0.1', '2016-02-21 11:45:14', 'Chrome', '/2016/', 'accueil', 'Windows'),
(467, 1, '127.0.0.1', '2016-02-21 11:45:25', 'Chrome', '/2016/', 'accueil', 'Windows'),
(468, 1, '127.0.0.1', '2016-02-21 11:46:21', 'Chrome', '/2016/', 'accueil', 'Windows'),
(469, 1, '127.0.0.1', '2016-02-21 11:46:43', 'Chrome', '/2016/', 'accueil', 'Windows'),
(470, 1, '127.0.0.1', '2016-02-21 11:47:13', 'Chrome', '/2016/', 'accueil', 'Windows'),
(471, 1, '127.0.0.1', '2016-02-21 11:47:36', 'Chrome', '/2016/', 'accueil', 'Windows'),
(472, 1, '127.0.0.1', '2016-02-21 11:47:46', 'Chrome', '/2016/', 'accueil', 'Windows'),
(473, 1, '127.0.0.1', '2016-02-21 11:47:52', 'Chrome', '/2016/', 'accueil', 'Windows'),
(474, 1, '127.0.0.1', '2016-02-21 11:47:57', 'Chrome', '/2016/', 'accueil', 'Windows'),
(475, 1, '127.0.0.1', '2016-02-21 11:49:48', 'Chrome', '/2016/', 'accueil', 'Windows'),
(476, 1, '127.0.0.1', '2016-02-21 11:50:20', 'Chrome', '/2016/', 'accueil', 'Windows'),
(477, 1, '127.0.0.1', '2016-02-21 11:50:32', 'Chrome', '/2016/', 'accueil', 'Windows'),
(478, 1, '127.0.0.1', '2016-02-21 11:51:53', 'Chrome', '/2016/', 'accueil', 'Windows'),
(479, 1, '127.0.0.1', '2016-02-21 11:53:49', 'Chrome', '/2016/', 'accueil', 'Windows'),
(480, 1, '127.0.0.1', '2016-02-21 11:56:20', 'Chrome', '/2016/', 'accueil', 'Windows'),
(481, 1, '127.0.0.1', '2016-02-21 11:57:15', 'Chrome', '/2016/', 'accueil', 'Windows'),
(482, 1, '127.0.0.1', '2016-02-21 12:00:49', 'Chrome', '/2016/', 'accueil', 'Windows'),
(483, 1, '127.0.0.1', '2016-02-21 12:01:41', 'Chrome', '/2016/', 'accueil', 'Windows'),
(484, 1, '127.0.0.1', '2016-02-21 12:05:30', 'Chrome', '/2016/', 'accueil', 'Windows'),
(485, 1, '127.0.0.1', '2016-02-21 12:06:27', 'Chrome', '/2016/', 'accueil', 'Windows'),
(486, 1, '127.0.0.1', '2016-02-21 12:07:12', 'Chrome', '/2016/', 'accueil', 'Windows'),
(487, 1, '127.0.0.1', '2016-02-21 12:09:10', 'Chrome', '/2016/', 'accueil', 'Windows'),
(488, 1, '127.0.0.1', '2016-02-21 12:09:39', 'Chrome', '/2016/', 'accueil', 'Windows'),
(489, 1, '127.0.0.1', '2016-02-21 12:09:53', 'Chrome', '/2016/', 'accueil', 'Windows'),
(490, 1, '127.0.0.1', '2016-02-21 12:10:09', 'Chrome', '/2016/', 'accueil', 'Windows'),
(491, 1, '127.0.0.1', '2016-02-21 12:10:17', 'Chrome', '/2016/', 'accueil', 'Windows'),
(492, 1, '127.0.0.1', '2016-02-21 12:10:27', 'Chrome', '/2016/', 'accueil', 'Windows'),
(493, 1, '127.0.0.1', '2016-02-21 12:11:12', 'Chrome', '/2016/', 'accueil', 'Windows'),
(494, 1, '127.0.0.1', '2016-02-21 12:11:31', 'Chrome', '/2016/', 'accueil', 'Windows'),
(495, 1, '127.0.0.1', '2016-02-21 12:11:55', 'Chrome', '/2016/', 'accueil', 'Windows'),
(496, 1, '127.0.0.1', '2016-02-21 12:12:07', 'Chrome', '/2016/', 'accueil', 'Windows'),
(497, 1, '127.0.0.1', '2016-02-21 12:12:21', 'Chrome', '/2016/', 'accueil', 'Windows'),
(498, 1, '127.0.0.1', '2016-02-21 12:12:47', 'Chrome', '/2016/', 'accueil', 'Windows'),
(499, 1, '127.0.0.1', '2016-02-21 12:13:00', 'Chrome', '/2016/', 'accueil', 'Windows'),
(500, 0, '127.0.0.1', '2016-02-21 12:17:30', 'Chrome', '/2016/actualite/6', 'actualite', 'Windows'),
(501, 0, '127.0.0.1', '2016-02-21 13:06:33', 'Chrome', '/2016/actualite/6', 'actualite', 'Windows'),
(502, 0, '127.0.0.1', '2016-02-21 13:06:54', 'Chrome', '/2016/actualite/6', 'actualite', 'Windows'),
(503, 0, '127.0.0.1', '2016-02-21 13:07:35', 'Chrome', '/2016/actualite/6', 'actualite', 'Windows'),
(504, 0, '127.0.0.1', '2016-02-21 13:08:48', 'Chrome', '/2016/actualite/6', 'actualite', 'Windows'),
(505, 0, '127.0.0.1', '2016-02-21 13:09:02', 'Chrome', '/2016/actualite/6', 'actualite', 'Windows'),
(506, 1, '127.0.0.1', '2016-02-21 13:09:06', 'Chrome', '/2016/', 'accueil', 'Windows'),
(507, 1, '127.0.0.1', '2016-02-21 13:10:01', 'Chrome', '/2016/', 'accueil', 'Windows'),
(508, 0, '127.0.0.1', '2016-02-21 13:10:14', 'Chrome', '/2016/actualite/5', 'actualite', 'Windows'),
(509, 0, '127.0.0.1', '2016-02-21 13:12:52', 'Chrome', '/2016/actualite/5', 'actualite', 'Windows'),
(510, 0, '127.0.0.1', '2016-02-21 13:14:28', 'Chrome', '/2016/actualite/5', 'actualite', 'Windows'),
(511, 0, '127.0.0.1', '2016-02-21 13:16:43', 'Chrome', '/2016/actualite/5', 'actualite', 'Windows'),
(512, 0, '127.0.0.1', '2016-02-21 13:17:03', 'Chrome', '/2016/actualite/5', 'actualite', 'Windows'),
(513, 0, '127.0.0.1', '2016-02-21 13:17:25', 'Chrome', '/2016/actualite/5', 'actualite', 'Windows'),
(514, 0, '127.0.0.1', '2016-02-21 13:17:48', 'Chrome', '/2016/actualite/5', 'actualite', 'Windows'),
(515, 0, '127.0.0.1', '2016-02-21 13:18:07', 'Chrome', '/2016/actualite/5', 'actualite', 'Windows'),
(516, 0, '127.0.0.1', '2016-02-21 13:18:43', 'Chrome', '/2016/actualite/5', 'actualite', 'Windows'),
(517, 0, '127.0.0.1', '2016-02-21 13:19:13', 'Chrome', '/2016/actualite/5', 'actualite', 'Windows'),
(518, 0, '127.0.0.1', '2016-02-21 13:19:45', 'Chrome', '/2016/actualite/5', 'actualite', 'Windows'),
(519, 0, '127.0.0.1', '2016-02-21 13:40:13', 'Chrome', '/2016/actualites/5', 'actualites', 'Windows'),
(520, 0, '127.0.0.1', '2016-02-21 13:41:04', 'Chrome', '/2016/actualites/5', 'actualites', 'Windows'),
(521, 0, '127.0.0.1', '2016-02-21 13:41:26', 'Chrome', '/2016/actualites/5', 'actualites', 'Windows'),
(522, 0, '127.0.0.1', '2016-02-21 13:41:32', 'Chrome', '/2016/actualites/5', 'actualites', 'Windows'),
(523, 0, '127.0.0.1', '2016-02-21 13:41:35', 'Chrome', '/2016/actualites/5', 'actualites', 'Windows'),
(524, 0, '127.0.0.1', '2016-02-21 13:41:40', 'Chrome', '/2016/actualites/5', 'actualites', 'Windows'),
(525, 0, '127.0.0.1', '2016-02-21 13:41:46', 'Chrome', '/2016/actualites/5', 'actualites', 'Windows'),
(526, 0, '127.0.0.1', '2016-02-21 13:41:54', 'Chrome', '/2016/actualites/5', 'actualites', 'Windows'),
(527, 1, '127.0.0.1', '2016-02-21 13:42:03', 'Chrome', '/2016/', 'accueil', 'Windows'),
(528, 1, '127.0.0.1', '2016-02-21 13:43:14', 'Chrome', '/2016/', 'accueil', 'Windows'),
(529, 1, '127.0.0.1', '2016-02-21 13:43:33', 'Chrome', '/2016/', 'accueil', 'Windows'),
(530, 1, '127.0.0.1', '2016-02-21 13:44:26', 'Chrome', '/2016/', 'accueil', 'Windows');

-- --------------------------------------------------------

--
-- Structure de la table `themes`
--

CREATE TABLE IF NOT EXISTS `themes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `rep` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `themes`
--

INSERT INTO `themes` (`id`, `nom`, `rep`) VALUES
(1, 'default', 'default');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `email`, `password`) VALUES
(1, 'DUPONT', 'Sylvain', 'dupont.sylvain59@gmail.com', '70c3c7b1ac7b00ea70d459d5b7d4b2669793010d'),
(2, 'Buguet', 'Renaud', 'renaudbuguet@hotmail.com', '0607c072ad73bfb21f88f4272ecc0bf5a35c27ad');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
