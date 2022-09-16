<?php
const USERS = [
    ['username' => 'admin123', 'password' => '12345678', 'role' => 'admin'],
    ['username' => 'user123', 'password' => '12345678', 'role' => 'manager'],

];

const ARTICLES = [
    [
        'name' => 'News',
        'text' => '"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"',
        'date' => '1-09-2022',
        'comments' => [[
            'username' => 'Denis',
            'text' => 'am libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.',
        ], [
            'username' => 'Ihor',
            'text' => 'am libero tempore quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.',
        ]],

    ],
    [
        'name' => 'Nails',
        'text' => 'these cases are perfectly simple and easy to distinguish.Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil andNor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil andwhich toil andNor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil andwhich toil andNor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil andwhich toil andNor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and',
        'date' => '1-09-2022',
        'comments' => [[
            'username' => 'Dmiriy',
            'text' => 'Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.'
    ]],
]
];

function getUserByUsernameAndPassword(string $username, string $password): ?array
{
    foreach (USERS as $user) {
        if($user['username'] === $username && $user['password'] === $password) {
            return $user;
        }
    }
    return null;
}

function getAllArticles(): array
{
    return ARTICLES;
}