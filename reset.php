<?php

require_once './inc/bootstrap.inc.php';


$em->getConnection()->query(
        "INSERT INTO `categories` (`id`, `name`) VALUES
        (5, 'Ancient'),
        (4, 'Big Cities'),
        (3, 'Eco-travel'),
        (1, 'Family'),
        (2, 'Museums');"
);
$em->getConnection()->query(
        "
INSERT INTO `regions` (`id`, `name`) VALUES
(4, 'Africa'),
(2, 'America'),
(3, 'Asia'),
(5, 'Australia'),
(1, 'Europe');"
);

$em->getConnection()->query(
        "INSERT INTO `travels` (`id`, `region_id`, `category_id`, `title`, `startDate`, `endDate`, `price`, `preview`, `description`, `image`, `thumbnail`) VALUES
(1, 1, 4, 'Roman Empire', '2015-09-01 00:00:00', '2015-09-15 00:00:00', '999.99', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 'roman-empire.jpg', 'thumb-roman-empire.jpg'),
(2, 2, 3, 'USA-Ecotourist', '2015-09-20 00:00:00', '2015-10-04 00:00:00', '780.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, ', 'usa-eco.png', 'thumb-usa-eco.png'),
(3, 5, 3, 'Old China', '2015-09-16 00:00:00', '2015-08-31 00:00:00', '950.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,', 'old-china.png', 'thumb-old-china.png');
"
);
