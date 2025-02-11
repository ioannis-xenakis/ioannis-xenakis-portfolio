import InfoIcon from "../Assets/Info-Icon";

export default function About({ setting, photo }) {
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
        </div>
    );
}
