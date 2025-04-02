import InfoIcon from "../Assets/Info-Icon";

export default function About({ setting, photo, techStack, contactItems }) {
    function getAge(dateString) {
        var today = new Date();
        var birthDate = new Date(dateString);
        var age = today.getUTCFullYear() - birthDate.getFullYear();
        var m = today.getMonth() - birthDate.getMonth();
        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }
        return age;
    }

    return (
        <div className="about-page-content">
            <div className="about-page-title">
                <InfoIcon />
                <h2 className="about-page-title-text">
                    {setting.first_english_name.toLowerCase()}.
                    <span className="blue-text">aboutMe</span>
                </h2>
            </div>
            <div className="about-page-description_and_photo">
                <div className="about-page-description-group">
                    <p className="main-text">{setting.about_me_description}</p>
                </div>
                <div className="about-page-photo-group">
                    <img
                        className="john-photo"
                        src={photo.photo_url}
                        alt="John Xenakis photo"
                    />
                </div>
            </div>
            <div className="about-page-personal-info">
                <div className="about-page-item">
                    <span className="main-text">
                        Name: {setting.first_greek_name}/
                        {setting.first_english_name} {setting.last_name}
                    </span>
                </div>
                <div className="about-page-item">
                    <span className="main-text">
                        Location: {setting.location}
                    </span>
                </div>
                <div className="about-page-item">
                    <span className="main-text">
                        Age: {getAge(setting.birth_date)} y.o.
                    </span>
                </div>
                <div className="about-page-item">
                    <span className="main-text">
                        Languages: {setting.languages}
                    </span>
                </div>
                <div className="about-page-item">
                    <span className="main-text">Pronouns: he/him/his</span>
                </div>
            </div>
            <div className="about-page-group">
                <h3 className="about-page-group-title-text">Tech Stack</h3>
                <div className="about-page-group-items">
                    {techStack.map((item) => (
                        <div className="about-page-item">
                            {item.icon_url !== "" && (
                                <img
                                    className="about-page-item-icon"
                                    src={item.icon_url}
                                    onError={(e) =>
                                        (e.target.style.display = "none")
                                    }
                                />
                            )}
                            <span className="main-text">{item.name}</span>
                        </div>
                    ))}
                </div>
            </div>
            <div className="about-page-group">
                <h3 className="about-page-group-title-text">Contact</h3>
                <p className="about-page-contact-description-text">
                    Here’s my info if you want to contact me and all of the
                    sites you can find me in.
                </p>
                <div className="about-page-group-items">
                    {contactItems.map((item) => (
                        <a
                            href={item.link_url}
                            className="about-page-link-button"
                            target="_blank"
                        >
                            {item.icon_location_url !== "" && (
                                <img
                                    className="about-page-item-icon"
                                    src={item.icon_location_url}
                                    onError={(e) =>
                                        (e.target.style.display = "none")
                                    }
                                />
                            )}
                            <span className="main-text">{item.name}</span>
                        </a>
                    ))}
                </div>
            </div>
        </div>
    );
}
