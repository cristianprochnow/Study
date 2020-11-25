CREATE TABLE `admin` (
`id` int(11) NOT NULL,
`username` varchar(50) NOT NULL,
`email` varchar(50) NOT NULL,
`password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', ' 827ccb0eea8a706c4c34a16891f84e7b');

CREATE TABLE `deleteduser` (
`id` int(11) NOT NULL,
`email` varchar(50) NOT NULL,
`deltime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `feedback` (
`id` int(11) NOT NULL,
`sender` varchar(50) NOT NULL,
`reciver` varchar(50) NOT NULL,
`title` varchar(100) NOT NULL,
`feedbackdata` varchar(500) NOT NULL,
`attachment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `notification` (
`id` int(11) NOT NULL,
`notiuser` varchar(50) NOT NULL,
`notireciver` varchar(50) NOT NULL,
`notitype` varchar(50) NOT NULL,
`time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
`name` varchar(50) NOT NULL,
`email` varchar(50) NOT NULL,
`password` varchar(50) NOT NULL,
`gender` varchar(50) NOT NULL,
`mobile` varchar(50) NOT NULL,
`designation` varchar(50) NOT NULL,
`image` varchar(50) NOT NULL,
`status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- Indexes for table `admin`
--
ALTER TABLE `admin`
ADD PRIMARY KEY (`id`);
--
-- Indexes for table `deleteduser`
--
ALTER TABLE `deleteduser`
ADD PRIMARY KEY (`id`);
--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
ADD PRIMARY KEY (`id`);
--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
ADD PRIMARY KEY (`id`);
--
-- Indexes for table `users`
--
ALTER TABLE `users`
ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `deleteduser`
--
ALTER TABLE `deleteduser`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
