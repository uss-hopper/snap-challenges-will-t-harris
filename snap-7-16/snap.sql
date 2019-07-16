ALTER DATABASE wharris21 CHARACTER SET utf8 COLLATE uft8_unicode_ci;

DROP TABLE IF EXISTS Task;

CREATE TABLE Task (
	taskId BINARY(20) NOT NULL,
	taskTitle VARCHAR(255) NOT NULL,
	taskStartDate DATETIME,
	taskDueDate DATETIME,
	taskStatus VARCHAR(64) NOT NULL,
	taskPriority VARCHAR(64) NOT NULL,
	taskDescription VARCHAR(256),
	PRIMARY KEY(taskId)
);