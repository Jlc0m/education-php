select users.username, count(posts.user_id) from users
left join posts on posts.user_id = users.user_id
group by users.username
order by users.username;

SELECT p.post_id, COUNT(pt.tag_id) AS tag_count
FROM posts p
LEFT JOIN post_tags pt ON p.post_id = pt.post_id
GROUP BY p.post_id
order by p.post_id;
