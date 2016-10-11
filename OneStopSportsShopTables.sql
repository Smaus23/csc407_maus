USE [OneStopSportsShop]
GO

/****** Object:  Table [dbo].[Baseball]    Script Date: 10/10/2016 8:58:55 PM ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Baseball](
	[BaseballID] [int] NULL,
	[ItemID] [int] NULL,
	[Apperal] [varchar](45) NULL,
	[Price] [money] NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO

/****** Object:  Table [dbo].[Basketball]    Script Date: 10/10/2016 8:59:51 PM ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Basketball](
	[BasketballID] [int] NULL,
	[ItemID] [int] NULL,
	[Apperal] [varchar](45) NULL,
	[Price] [money] NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO

/****** Object:  Table [dbo].[Cheerleading]    Script Date: 10/10/2016 9:00:16 PM ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Cheerleading](
	[CheerleadingID] [int] NULL,
	[ItemID] [int] NULL,
	[Apperal] [varchar](45) NULL,
	[Price] [money] NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO

/****** Object:  Table [dbo].[Children_Apperal]    Script Date: 10/10/2016 9:01:00 PM ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Children_Apperal](
	[ChildID] [int] NULL,
	[ItemID] [int] NULL,
	[Apperal] [varchar](45) NULL,
	[Price] [money] NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO

/****** Object:  Table [dbo].[Football]    Script Date: 10/10/2016 9:01:34 PM ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Football](
	[FootballID] [int] NULL,
	[ItemID] [int] NULL,
	[Apperal] [varchar](45) NULL,
	[Price] [money] NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO

/****** Object:  Table [dbo].[Items]    Script Date: 10/10/2016 9:01:50 PM ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Items](
	[ItemID] [int] NULL,
	[Apperal] [varchar](45) NULL,
	[Price] [money] NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO

/****** Object:  Table [dbo].[Mens_Apperal]    Script Date: 10/10/2016 9:02:15 PM ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Mens_Apperal](
	[MensID] [int] NULL,
	[ItemID] [int] NULL,
	[Apperal_Name] [varchar](45) NULL,
	[Price] [money] NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO

/****** Object:  Table [dbo].[Soccer]    Script Date: 10/10/2016 9:02:30 PM ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Soccer](
	[SoccerID] [int] NULL,
	[ItemID] [int] NULL,
	[Apperal] [varchar](45) NULL,
	[Price] [money] NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO

/****** Object:  Table [dbo].[Softball]    Script Date: 10/10/2016 9:02:52 PM ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Softball](
	[SoftballID] [int] NULL,
	[ItemID] [int] NULL,
	[Apperal] [varchar](45) NULL,
	[Price] [money] NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO

/****** Object:  Table [dbo].[Track]    Script Date: 10/10/2016 9:03:11 PM ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Track](
	[TrackID] [int] NULL,
	[ItemID] [int] NULL,
	[Apperal] [varchar](45) NULL,
	[Price] [money] NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO

/****** Object:  Table [dbo].[Volleyball]    Script Date: 10/10/2016 9:03:28 PM ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Volleyball](
	[VolleyballID] [int] NULL,
	[ItemID] [int] NULL,
	[Apperal] [varchar](45) NULL,
	[Price] [money] NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO

/****** Object:  Table [dbo].[Womens_Apperal]    Script Date: 10/10/2016 9:03:48 PM ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Womens_Apperal](
	[WomensID] [int] NULL,
	[ItemID] [int] NULL,
	[Apperal_Name] [varchar](45) NULL,
	[Price] [money] NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO


